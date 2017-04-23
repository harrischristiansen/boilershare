<?php
/*
	Classroom Model for boilershare.purduecs.com
	File created by Harris Christiansen (HarrisChristiansen.com) on April 23, 2017
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    public function university()
    {
        return $this->belongsTo('App\Models\University');
    }
    
    public function questions()
    {
        return $this->hasMany('App\Models\Question');
    }
    
    public function resources()
    {
        return $this->hasMany('App\Models\Resource');
    }
}
