<?php
/*
	Resource Controller for boilershare.purduecs.com
	File created by Harris Christiansen (HarrisChristiansen.com) on April 23, 2017
*/

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests\ViewClassRequest;
use App\Http\Requests\ManageClassRequest;
use App\Models\Classroom;
use App\Models\ClassResource;

class ResourceController extends Controller {
	
	/////////////////////////// List ///////////////////////////
	
	public function getList(ViewClassRequest $request, Classroom $classroom) {
		return view('pages.resources.list');
	}
	
	/////////////////////////// Create ///////////////////////////
	
	public function getCreate(ManageClassRequest $request, Classroom $classroom) {
		return view('pages.resources.create');
	}
	
	public function postCreate(ManageClassRequest $request, Classroom $classroom) {
		// Create Resource Object
		$title = $request->input("title");
		
		$resource = new ClassResource();
		$resource->title = $title;
		$resource->file = "";
		$resource->classroom_id = $classroom->id;
		$resource->user_id = Auth::user()->id;
		$resource->save();
		
		
		// Upload File
		if ($request->hasFile('file')) {
			$file = $request->file("file");
			$resource->file = $file->getClientOriginalName();
			$resource->save();
			
			if ($file->isValid()) {
				$extension = strtolower($file->getClientOriginalExtension());
				if ($extension=="jpg" || $extension=="jpeg" || $extension=="png" || $extension=="pdf" || $extension=="doc" || $extension=="docx" || $extension=="txt") {
					$uploadPath = 'uploads/resources/';
					$file->move($uploadPath, $resource->storage_name());
				} else {
					$request->session()->flash('alert', "Error: Invalid File Type!");
				}
			}
		}
		
		return redirect()->route('resources', [$classroom])->with('alert', "Success! Added Resource: ".$resource->title);
	}
	
	/////////////////////////// Delete ///////////////////////////
	
	public function getDelete(EditQuestionRequest $request, Classroom $classroom, ClassResource $resource) {
		$resource->delete();
		return redirect()->route('resources', [$classroom])->with('alert-success', "Success! Deleted resource: ".$resource->title);
	}
}
