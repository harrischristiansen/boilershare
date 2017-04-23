<?php
/*
	Home Controller for boilershare.purduecs.com
	File created by Harris Christiansen (HarrisChristiansen.com)
*/

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller {
	
	public function __construct() {
		$this->middleware('auth', ['except' => [
            'index', 'getLogout',
        ]]);
	}
	
	public function index() {
		return view('pages.index');
	}
	
	public function getLogout(Request $request) {
		Auth::logout();
		$request->session()->flash('alert', "You have been logged out!");
		return $this->index();
	}
	
	public function getForm() {
		return view('pages.form');
	}
}
