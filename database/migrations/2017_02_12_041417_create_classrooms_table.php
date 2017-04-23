<?php
/*
	Initial Classroom Migration for boilershare.purduecs.com
	File created by Harris Christiansen (HarrisChristiansen.com) on April 23, 2017
*/

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassroomsTable extends Migration
{
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('location')->nullable();
            $table->string('website')->nullable();
            $table->timestamps();
        });
        
        Schema::create('classrooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('university_id')->foreign()->references('id')->on('universities');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('classroom_user', function (Blueprint $table) {
            $table->integer('classroom_id')->unsigned()->index();
            $table->foreign('classroom_id')->references('id')->on('classrooms');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->primary(['classroom_id', 'user_id']);
            $table->boolean('teacher')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('classroom_user');
        Schema::dropIfExists('classes');
        Schema::dropIfExists('universities');
    }
}
