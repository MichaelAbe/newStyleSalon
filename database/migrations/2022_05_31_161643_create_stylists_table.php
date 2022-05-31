<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stylists', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('specialty');
            $table->string('bio');
            $table->string('picture');
        });
    }

    //          'name' =>'Mich',
    //         'specialty' => 'conditioning',
    //         'picture' => 'a picture of the stylist',
    //         'bio' => 'fave color orange'


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stylists');
    }
};
