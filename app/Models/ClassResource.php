<?php
/*
	ClassResource Model for boilershare.purduecs.com
	File created by Harris Christiansen (HarrisChristiansen.com) on April 23, 2017
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassResource extends Model
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
    
    public function storage_name()
    {
	    $fileExt = pathinfo($this->file, PATHINFO_EXTENSION);
	    return $this->user->id.'_'.substr(md5($this->file), -6).'.'.$fileExt;
    }
    
    public function storage_path()
    {
	    return '/uploads/resources/'.$this->storage_name();
    }
}
