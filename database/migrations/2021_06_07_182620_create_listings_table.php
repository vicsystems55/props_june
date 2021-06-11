<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('listing_code');
            $table->boolean('premium')->default(0);
            $table->boolean('auto_boost')->default(0);
            $table->bigInteger('agent_id')->unsigned();
            $table->string('title');
            $table->string('description');

            $table->integer('bedrooms')->unsigned()->default('0');
            $table->integer('toilets')->unsigned()->default('0');
            $table->integer('bathrooms')->unsigned()->default('0');
            $table->string('parking')->nullable()->default('0');

            $table->string('total_area')->nullable();
            $table->string('covered_area')->nullable();

            $table->double('price');
            $table->string('discount')->default('0');
           
            

            $table->integer('views')->default('0');
            $table->integer('likes')->default('0');
            $table->integer('unlikes')->default('0');


            $table->bigInteger('type_id')->unsigned();
            $table->bigInteger('sub_type_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('user_subscription_id')->unsigned()->nullable();

            $table->string('status')->default('inactive');

            $table->foreign('agent_id')->references('id')->on('users');
            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('sub_type_id')->references('id')->on('sub_types');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('user_subscription_id')->references('id')->on('user_subscriptions');

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
        Schema::dropIfExists('listings');
    }
}
