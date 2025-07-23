<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateBookingTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table)
        {
            $table->id();

            $table->integer('bike_id');

            $table->integer('user_id');

            $table->dateTime('pick_up_date');

            $table->dateTime('return_date');

            $table->string('total_hours');

            $table->string('total_cost');

            $table->string('transaction_code');

            $table->string('status');

            $table->string('phone_no')->nullable();

            $table->string('remarks')->default('No remarks');

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
        Schema::drop('bookings');
    }
}
