<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

use Xcholars\Storage\FileSystem;

class Bike extends Model
{
    protected $fillable = [
        'photo',
        'category',
        'bike_name',
        'bike_number',
        'model',
        'brand',
        'price',
    ];

    public function isBooked($pick_up_date, $return_date)
    {
        $res = [];

        foreach (Booking::where('bike_id', $this->id)->get() as $booking)
        {
            $res[] = $this->betweenDates($pick_up_date, $booking->pick_up_date, $booking->return_date);

            $res[] = $this->betweenDates($return_date, $booking->pick_up_date, $booking->return_date);

            $res[] = $this->betweenDates($booking->pick_up_date, $pick_up_date ,$return_date);

            $res[] = $this->betweenDates($booking->return_date, $pick_up_date ,$return_date);
        }
             
        return in_array(true, $res);
    }

    public function betweenDates($cmpDate,$startDate,$endDate)
    {
        return (strtotime($cmpDate) >= strtotime($startDate))
                                   &&
              (strtotime($cmpDate) <= strtotime($endDate));
    }

    public function upload_photo()
    {
        $storage = new FileSystem(upload_path('images/bikes'));

        $file = new \Upload\File('photo', $storage);

        $fileName = uniqid();

        $file->setName($fileName);

        $file->upload();

        return $file->getNameWithExtension();
    }


}
