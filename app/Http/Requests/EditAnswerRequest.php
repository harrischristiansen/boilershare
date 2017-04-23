<?php
/*
	Edit Answer Request for boilershare.purduecs.com
	File created by Harris Christiansen (HarrisChristiansen.com) on April 23, 2017
*/

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Gate;

class EditAnswerRequest extends FormRequest
{
    public function authorize()
    {
        $answer = request()->route('answer');
        if ($answer == null) {
	        return true;
        }
        
	    return Gate::allows('edit-answer', $answer);
    }
    
    public function rules()
    {
        return [
            'text'      	=> 'required|max:2000',
        ];
    }
}
