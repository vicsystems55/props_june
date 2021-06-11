<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavouriteListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favourite_listings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('listing_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->integer('view_count')->unsigned();
            $table->foreign('listing_id')->references('id')->on('listings');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('favourite_listings');
    }
}
