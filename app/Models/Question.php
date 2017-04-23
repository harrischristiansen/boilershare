<?php
/*
	Question Model for boilershare.purduecs.com
	File created by Harris Christiansen (HarrisChristiansen.com) on April 23, 2017
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
	use SoftDeletes;
	protected $table = 'questions';
	
	public function question()
	{
		return "";
	}
	
    public function classroom()
    {
        return $this->belongsTo('App\Models\Classroom');
    }
	
	public function answers()
	{
		return $this->hasMany('App\Models\Answer');
	}
	
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
