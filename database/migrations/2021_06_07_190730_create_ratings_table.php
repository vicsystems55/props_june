<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('listing_id')->unsigned()->nullable();
            $table->bigInteger('agent_id')->unsigned()->nullable();
            $table->bigInteger('vendor_id')->unsigned()->nullable();
            $table->bigInteger('agency_id')->unsigned()->nullable();

            $table->foreign('listing_id')->references('id')->on('listings');
            $table->foreign('agent_id')->references('id')->on('users');
            $table->foreign('vendor_id')->references('id')->on('users');
            $table->foreign('agency_id')->references('id')->on('users');
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
        Schema::dropIfExists('ratings');
    }
}
