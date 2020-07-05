<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowUnfollowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follow_unfollow', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_sendiri')->unsigned();
            $table->bigInteger('id_lain')->unsigned();
            $table->integer('value');
            $table->foreign('id_sendiri')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_lain')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('follow_unfollow');
    }
}
