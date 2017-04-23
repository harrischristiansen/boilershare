<?php
/*
	Initial Q&A Questions Migration for boilershare.purduecs.com
	Created By Harris Christiansen (HarrisChristiansen.com) on April 23, 2017
*/

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->integer('classroom_id')->foreign()->references('id')->on('classrooms');
            $table->integer('user_id')->foreign()->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
