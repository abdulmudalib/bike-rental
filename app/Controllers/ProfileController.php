<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Auth;

use Xcholars\Support\Proxies\Hash;

use App\Models\User;

class ProfileController extends Controller
{
    public function all(Request $request, Response $response)
    {
        return $response->withView('back/customers', ['users' => User::all()]);
    }

    public function show(Request $request, Response $response)
    {    if (Auth::user()->isAdmin()) 
        {
            return $response->withView('back/profile', ['user' => User::find($request->id ?? Auth::id() )]);
        }
        return $response->withView('front/profile', ['user' => Auth::user()]);
    }

    public function update(Request $request, Response $response)
    {   
        if ($error = $this->isInvalid('profileupdate', $request))
        {
            return $error;
        }

        $request->post->set('password', Hash::make($request->password));
        
        $id = $request->id ?? Auth::id();

        $data = empty($request->password) ? $request->except('confirmPassword','password') :  $request->except('confirmPassword');
       
        try {
            User::find($id)->update(
                array_merge(
                    $data,
                    ['photo' => (new User)->upload_photo()]
                )
            );
            
            return  $response->withSuccess('Success: Profile Updated');

        } catch (\Throwable $th) 
        {
            User::find($id)->update($data);
            return  $response->withSuccess('Success: Profile Updated');
        }
    
    }
}
