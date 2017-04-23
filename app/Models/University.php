<?php
/*
	University Model for boilershare.purduecs.com
	File created by Harris Christiansen (HarrisChristiansen.com) on April 23, 2017
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable = [
        'name', 'location', 'website',
    ];
    
	protected $table = 'universities';
    
    public function classrooms()
    {
        return $this->hasMany('App\Models\Classroom');
    }
}
