<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\Booking;

use Xcholars\Support\Proxies\Auth;

use Xcholars\Support\Proxies\Gate;

class BookingsController extends Controller
{
    public function show(Request $request, Response $response)
    {   if ($id = $request->id) 
        {
            if (Auth::check() && Gate::allows('only-admin', Auth::user()))
            {
                return $response->withView(
                    '/back/booking_edit', 
                    ['booking' => Booking::find($id)]
                );
            }
            return $response->withView(
                '/front/bike', 
                ['booking' => Booking::find($id)]
            );
        }
        return $response->withView(
            '/back/bookings', 
            ['bookings' => Booking::all()]
        );
    }

    public function update(Request $request, Response $response)
    {
        if ($error = $this->isInvalid('bookingedit', $request))
        {
            return $error;
        }

        Booking::find($request->id)->update(
            ['status' => $request->status, 'remarks' => $request->remarks]
        );

        return $response->withSuccess("Success: Booking Status Updated");
    }

   

}

