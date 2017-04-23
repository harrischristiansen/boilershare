<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use View;

use App\Models\Classroom;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function __construct(Request $request) {
	    
	    // If classID in URL, add classroom to blade template
		$classID = $request->route("classroom");
		if ($classID != NULL) {
			$class = Classroom::find($classID);
			View::share ('classroom', $class);
		}
    }
}
