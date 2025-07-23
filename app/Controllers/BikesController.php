<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Auth;

use Xcholars\Support\Proxies\Gate;

use App\Models\Bike;

use App\Models\Booking;

class BikesController extends Controller
{
    public function create(Request $request, Response $response)
    {
        if ($error = $this->isInvalid('bike', $request))
        {
            return $error;
        }

        $bike = Bike::create(
            array_merge(
                $request->all(),
                ['photo' => (new Bike)->upload_photo()]
            )
        );

        if($bike)
        {
            return $response->withSuccess('Bike Added Successfully');
        }

        return $response->withError('Try again! An error occurred');
    }

    public function search(Request $request, Response $response)
    {
        return $response->withView('/front/includes/bikes', 
                                  ['bikes' => Bike::where('bike_name',$request->search_key)
                                                ->orWhere('model',$request->search_key)->get()]);
    }

    public function edit(Request $request, Response $response)
    {
        return $response->withView('/back/edit_bike', ['bike' => Bike::find($request->id)]);
    }

    public function update(Request $request, Response $response)
    {
        $data = $request->all();
        $id = $request->id;

        if ($error = $this->isInvalid('bikeupdate', $request))
        {
            return $error;
        }
       try {
        Bike::find($id)->update(
                array_merge(
                    $data,
                    ['photo' => (new Bike)->upload_photo()]
                )
            );
            
            return  $response->withSuccess('Success: Profile Updated');

        } catch (\Throwable $th) 
        {
            Bike::find($id)->update($data);
            return  $response->withSuccess('Success: Profile Updated');
        }

    }

    public function delete(Request $request, Response $response)
    {
        Bike::find($request->id)->delete();

        return $response->withView('/back/bikes', ['bikes' => Bike::all()]);
    }

    public function show(Request $request, Response $response)
    {      
        if ($request->bike_id) 
        {   
            return $response->withView(
                '/front/rent_bike',
                ['bike' => Bike::find($request->bike_id)]
            );
        }
        if (Auth::check() && Gate::allows('only-admin', Auth::user()))
        {
            return $response->withView('/back/bikes', ['bikes' => Bike::all()]);
        }
          
        return $response->withView('/front/bikes', ['bikes' => Bike::all()]);
    }

    public function Rent(Request $request, Response $response)
    {      
        if ($error = $this->isInvalid('rent', $request))
        {
            return $error;
        }
        
        if (Bike::find($request->bike_id)->isBooked($request->pick_up_date, $request->return_date))
        {
            return $response->withError(
                date('d F, Y h:i:s', strtotime($request->pick_up_date))
                   . ' <br> to <br>' . 
                date('d F, Y h:i:s', strtotime($request->return_date)).
                '<br><br> Sorry! This bike is already booked during those hours. 
                Please select another time.'
            );
        }
        
         
        if (Booking::create($request->all())) 
        {
            return $response->withSuccess('Success: Rental request submitted');
        }
          
        return $response->withError('Oops: Unknown error occured. Try again.');
    }
}

