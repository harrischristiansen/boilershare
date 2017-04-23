<?php
/*
	View Class Request for boilershare.purduecs.com
	File created by Harris Christiansen (HarrisChristiansen.com) on April 23, 2017
*/

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Gate;

use App\Models\Classroom;

class ViewClassRequest extends FormRequest
{
    public function authorize()
    {   
	    $classroom = request()->route('classroom');
	    return true;
    }
    
    public function rules()
    {
        return [
            //
        ];
    }
}
