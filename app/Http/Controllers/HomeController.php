<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        $data['history'] = '';
        return view('home', $data);
    }


    public function showPage1()
    {
        $data = array();
        $data['history'] = '';
        return view('p1', $data);        
    }
    public function showPage2()
    {
        $data = array();
        $data['history'] = '';
        return view('p2', $data);        
    }

    public function showPage3()
    {
        $data = array();
        $data['history'] = '';
        return view('p3', $data);        
    }

    public function showPage4()
    {
        $data = array();
        $data['history'] = '';
        return view('p4', $data);        
    }

    public function showPage5()
    {
        $data = array();
        $data['history'] = '';
        return view('p5', $data);        
    }



}
