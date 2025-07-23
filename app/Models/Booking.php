<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

class Booking extends Model
{
    protected $fillable = [
        'bike_id',
        'user_id',
        'pick_up_date',
        'return_date',
        'total_hours',
        'total_cost',
        'transaction_code',
        'phone_no',
        'status',
        'remarks',
    ];

    public function bike()
    {
        return $this->belongsTo(Bike::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
     public function sales()
     {
        $sales = 0;

        foreach ($this->where('status', 'accepted')->get() as $booking) 
        {
            $sales = $sales + $booking->total_cost;
        }
       
        return $sales;
     }
    public function isPending()
    {
        return $this->status == 'pending';
    }

    public function isRejected()
    {
        return $this->status == 'rejected';
    }
    public function isConfirmed()
    {
        return $this->status == 'accepted';
    }

    public function color()
    { 
        if ($this->isPending()) 
        {
           return 'warning';
        }
       if ($this->isConfirmed()) 
       {
          return 'success';
       }
       if ($this->isRejected()) 
       {
          return 'danger';
       }
    }

}
