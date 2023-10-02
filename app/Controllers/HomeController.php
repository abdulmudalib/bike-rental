<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\Bike;

use App\Models\Booking;

use App\Models\User;

class HomeController
{
   public function show(Request $request, Response $response)
   {   
        return $response->withView(
          'welcome/home',
          ['route' => $request->getShortRequestUri()]
        );
   }

   public function showAdmin(Response $response)
   {
      return $response->withView(
          'back/dashboard',
          [
              'users_count'   => User::count(),
              'bookings_count'   => Booking::count(),
              'bikes_count' => Bike::count(),
              'sales' => (new Booking)->sales(),
          ]
       );
   }
}
