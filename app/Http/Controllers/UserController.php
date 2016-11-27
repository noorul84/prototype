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
		$data['users'] = \App\User::where('id', '!=', 1)->orderBy('id', 'desc')->paginate(10);
		return view('user.index', $data);
	}


	public function postIndex(Request $request)
	{
		$data = array();
		if (!empty($request->id)) {
	        $i = \App\User::find($request->id);
	        $save = $i->user_delete($request->id);
	        return redirect()->route($save[2])->with([
	            'message' => $save[0], 
	            'label' => 'alert alert-'.$save[1].' alert-dismissible'
	        ]); 		        	
		}		
		$data['users'] = \App\User::where('id', '!=', 1)->orderBy('id', 'desc')->paginate(10);		
		return view('user.index', $data);
	}


	public function showResult($id)
	{
		$data = array();
		$data['details'] = \App\Survey::where('user_id', $id)->orderBy('id', 'desc')->get();
		return view('user.result', $data);
	}


}
