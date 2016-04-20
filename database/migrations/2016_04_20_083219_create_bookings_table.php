<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name', 50);
            $table->string('day_name', 15);
            $table->string('type', 15);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('bookings');
    }
}
