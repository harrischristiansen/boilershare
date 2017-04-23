<?php
/*
	Edit Question Request for boilershare.purduecs.com
	File created by Harris Christiansen (HarrisChristiansen.com) on April 23, 2017
*/

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Gate;

class EditQuestionRequest extends FormRequest
{
    public function authorize()
    {
        $question = request()->route('question');
	    return Gate::allows('edit-question', $question);
    }
    
    public function rules()
    {
        return [
            'subject'      	=> 'required|max:255',
            'text'    => 'max:2048',
        ];
    }
}
