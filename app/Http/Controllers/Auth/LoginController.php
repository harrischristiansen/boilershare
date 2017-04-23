<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller {

	use AuthenticatesUsers {
		logout as logoutUser;
	}

    protected $redirectTo = '/';

    public function __construct() {
        $this->middleware('guest', ['except' => 'logout']);
    }
    
    public function authenticated($request, $user) {
	    $request->session()->flash('alert', 'Welcome back ' . $user->name . ', you have been logged in!');
	}
}
