<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

use Xcholars\Storage\FileSystem;

class User extends Model
{
    protected $fillable = [
        'fullName',
        'email',
        'photo',
        'phone',
        'password',
        'status',
    ];

    public function isAdmin()
    {
       return $this->type == 'admin';
    }
    
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function upload_photo()
    {
        $storage = new FileSystem(upload_path('images/users'));

        $file = new \Upload\File('photo', $storage);

        $fileName = uniqid();

        $file->setName($fileName);

        $file->upload();

        return $file->getNameWithExtension();
    }
}
