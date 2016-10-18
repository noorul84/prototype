<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function showIndex()
	{
		$data = array();
		$data['users'] = \App\User::orderBy('id', 'desc')->paginate(10);
		return view('user.index', $data);
	}


	public function postIndex(Request $request)
	{
		$data = array();
		$data['users'] = \App\User::orderBy('id', 'desc')->paginate(10);
		return view('user.index', $data);
	}


	public function showResult($id)
	{
		$data = array();
		$data['history'] = \App\Survey::where('user_id', $id)->orderBy('id', 'desc')->get();
		return view('user.result', $data);
	}


}
