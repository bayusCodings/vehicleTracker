<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movement', function (Blueprint $table) {
            $table->increments('id');
            $table->float('lat',9,7);
            $table->float('lng',10,7);
            $table->date('date');
        });

        Schema::table('movement', function (Blueprint $table) {
            $table->integer('driver_id')->unsigned();
            $table->foreign('driver_id')->references('id')->on('drivers');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movement');
    }
}
