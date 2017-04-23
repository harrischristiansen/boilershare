<?php
/*
	Resource Model for boilershare.purduecs.com
	File created by Harris Christiansen (HarrisChristiansen.com) on April 23, 2017
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resource extends Model
{
	use SoftDeletes;
	protected $table = 'resources';
	
    public function classroom()
    {
        return $this->belongsTo('App\Models\Classroom');
    }
	
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
