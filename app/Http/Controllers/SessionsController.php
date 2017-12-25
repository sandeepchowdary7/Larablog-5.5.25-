<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class SessionsController extends Controller
{
	public function __construct()
	{

		$this->middleware('guest', ['except' => 'destory']);
	}

    public function create()
    {

    	return view('session.create');

    }

    public function store()
    {

    	if(! auth()->attempt(request(['email','password']))){

    		return view('session.create');
    	}

    	auth()->login($user);

    	return redirect('/articles');

    }


    public function destory()
    {

    	auth()->logout();

    	return redirect('/articles');

    }
}
