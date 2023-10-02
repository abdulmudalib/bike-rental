<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateBikesTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('bikes', function (Blueprint $table)
        {
            $table->id();

            $table->string('photo')->default('default.jpg');

            $table->string('bike_name');

            $table->string('bike_number');

            $table->string('brand');

            $table->string('model');

            $table->string('price');

            $table->timestamps();
        });

    }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('bikes');
    }
}
