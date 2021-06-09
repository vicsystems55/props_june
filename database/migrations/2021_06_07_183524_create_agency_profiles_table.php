<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgencyProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agency_profiles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('agency_id')->unsigned();
            $table->string('country');
            $table->string('bio');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('phone');
            $table->string('company_name');
            $table->string('company_logo');
            $table->string('years');
            $table->string('address');
            $table->string('status')->default('inactive');
            $table->string('skills');
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
        Schema::dropIfExists('agency_profiles');
    }
}
