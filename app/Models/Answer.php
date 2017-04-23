<?php
/*
	Answer Model for boilershare.purduecs.com
	File created by Harris Christiansen (HarrisChristiansen.com) on April 23, 2017
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answer extends Model
{
	use SoftDeletes;
	protected $table = 'answers';
	
    public function question()
    {
        return $this->belongsTo('App\Models\Question');
    }
	
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
