<?php
/*
	Q&A Controller for boilershare.purduecs.com
	File created by Harris Christiansen (HarrisChristiansen.com) on April 23, 2017
*/

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests\ViewClassRequest;
use App\Http\Requests\ManageClassRequest;
use App\Http\Requests\EditQuestionRequest;
use App\Http\Requests\EditAnswerRequest;
use App\Models\Classroom;
use App\Models\Question;
use App\Models\Answer;

class QAController extends Controller {
	
	/////////////////////////// List Questions ///////////////////////////
	
	public function getList(ViewClassRequest $request, Classroom $classroom) {
		return view('pages.QA.threads');
	}
	
	/////////////////////////// Create Question ///////////////////////////
	
	public function getCreate(ManageClassRequest $request, Classroom $classroom) {
		$question = new Question();
		$question->id = 0;
		return view('pages.QA.create', compact('question'));
	}
	
	public function postCreate(ManageClassRequest $request, Classroom $classroom, Question $question=null) {
		// Get Inputs
		$subject = $request->input("subject");
		$text = $request->input("text");
		
		//$question = new Question();
		$question->subject = $subject;
		$question->user_id = Auth::user()->id;
		$question->classroom_id = $classroom->id;
		$question->save();
		
		$answer = new Answer();
		$answer->text = $text;
		$answer->user_id = Auth::user()->id;
		$answer->question_id = $question->id;
		$answer->save();
		
		return redirect()->route('QA-thread', [$classroom, $question])->with('alert', "Success! Created Thread: ".$question->subject);
	}
	
	/////////////////////////// View Thread ///////////////////////////
	
	public function getThread(ViewClassRequest $request, Classroom $classroom, Question $question) {
		return view('pages.QA.thread', compact('question'));
	}
	
	/////////////////////////// Submit/Edit Answer ///////////////////////////
	
	public function getEdit(ManageClassRequest $request, Classroom $classroom, Question $question, Answer $answer) {
		return view('pages.QA.edit', compact('answer'));
	}
	
	public function postEdit(EditAnswerRequest $request, Classroom $classroom, Question $question, Answer $answer=null) {
		// Determine if new answer
		$newAnswer = ($answer->id == null);
		
		// Get Inputs
		$text = $request->input("text");
		
		// Update Answer Object
		$answer->text = $text;
		$answer->user_id = Auth::user()->id;
		$answer->question_id = $question->id;
		$answer->save();
		
		return redirect()->route('QA-thread', [$classroom, $question])->with('alert', "Success! Saved answer to thread: ".$question->subject);
	}
	
	/////////////////////////// Delete Question/Answer ///////////////////////////
	
	public function getDeleteThread(ManageClassRequest $request, Classroom $classroom, Question $question) {
		$question->delete();
		
		return redirect()->route('QA', [$classroom])->with('alert-success', "Success! Deleted thread: ".$question->subject);
	}
	
	public function getDeleteAnswer(ManageClassRequest $request, Classroom $classroom, Question $question, Answer $answer) {
		$answer->delete();
		
		return redirect()->route('QA-thread', [$classroom, $question])->with('alert-success', "Success! Deleted answer by ".$answer->user->name);
	}
}
