<?php
/*
	Classroom Controller for boilershare.purduecs.com
	File created by Harris Christiansen (HarrisChristiansen.com) on April 23, 2017
*/

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests\EditClassRequest;
use App\Http\Requests\ManageClassRequest;
use App\Http\Requests\ViewClassRequest;
use App\Models\Classroom;
use App\Models\University;

class ClassroomController extends Controller {
	
	/////////////////////////// List Classes ///////////////////////////
	
	public function getList() {
		$classrooms = Classroom::all();
		return view('pages.class.classes', compact("classrooms"));
	}
	
	/////////////////////////// Create Class ///////////////////////////
	
	public function getCreate() {
		$classroom = new Classroom();
		$classroom->id = 0;
		return view('pages.class.edit', compact('classroom'));
	}
	
	/////////////////////////// View Class ///////////////////////////
	
	public function getClass(ViewClassRequest $request, Classroom $classroom) {
		return view('pages.class.class');
	}
	
	/////////////////////////// Edit Class ///////////////////////////
	
	public function getEdit(ManageClassRequest $request, Classroom $classroom) {
		return view('pages.class.edit');
	}
	
	public function postEdit(EditClassRequest $request, Classroom $classroom=null) {
		// Get Inputs
		$name = $request->input("name");
		$university_name = $request->input("university");
		
		// Get Relations
		$university = University::firstOrCreate(['name' => $university_name]);
		
		// Update Classroom
		$classroom->name = $name;
		$classroom->university_id = $university->id;
		$classroom->save();
		
		return redirect()->route('class', [$classroom->id])->with('alert', "Success! Saved classroom: ".$name);
	}
}
