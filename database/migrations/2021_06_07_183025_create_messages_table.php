<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('to_id')->unsigned();
            $table->string('from_name');
            $table->string('from_phone');
            $table->string('from_email');

            $table->string('listing_code')->nullable();
            $table->bigInteger('receiver_id')->unsigned();

            $table->string('title')->nullable();
            $table->string('body')->nullable();
            $table->string('status')->default('unread');


            $table->foreign('to_id')->references('id')->on('users');
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
        Schema::dropIfExists('messages');
    }
}
