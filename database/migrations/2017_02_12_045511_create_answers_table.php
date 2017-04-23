<?php
/*
	Initial Q&A Answers Migration for boilershare.purduecs.com
	Created By Harris Christiansen (HarrisChristiansen.com) on April 23, 2017
*/

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('question_id')->foreign()->references('id')->on('questions');
            $table->text('text');
            $table->integer('user_id')->foreign()->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
