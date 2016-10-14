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
    public function showDashboard()
    {
        $data = array();
        $data['history'] = '';
        return view('home', $data);
    }

    public function postDashboard(Requests\CreateProject $request)
    {
        session()->put('project', $request->project);
        return redirect()->route('p1');
    }




    public function showPage1()
    {
        return view('p1');        
    }

    public function postPage1(Requests\CreateSurvey1 $request)
    {
        session()->put('p1', $request->all());
        return redirect()->route('p2');
    }





    public function showPage2()
    {
        return view('p2');        
    }

    public function postPage2(Requests\CreateSurvey2 $request)
    {
        session()->put('p2', $request->all());
        return redirect()->route('p3');
    }







    public function showPage3()
    {
        return view('p3');        
    }

    public function postPage3(Requests\CreateSurvey3 $request)
    {
        session()->put('p3', $request->all());
        return redirect()->route('p4');
    }





    public function showPage4()
    {
        return view('p4');        
    }

    public function postPage4(Requests\CreateSurvey4 $request)
    {
        session()->put('p4', $request->all());
        return redirect()->route('p5');
    }







    public function showPage5()
    {
        $data = array();
        $data['a1'] = (session()->get('p1')['a1'] + session()->get('p1')['a2'] + session()->get('p1')['a3'] + session()->get('p1')['a4']) / 4;
        $data['a2'] = (session()->get('p1')['a5'] + session()->get('p1')['a6']) / 2;
        $data['a3'] = (session()->get('p1')['a7'] + session()->get('p1')['a8']) / 2;
        $data['a4'] = (session()->get('p1')['a9'] + session()->get('p1')['a10'] + session()->get('p1')['a11'] + session()->get('p1')['a12'] + session()->get('p1')['a13']) / 5;
        $data['a5'] = (session()->get('p1')['a14'] + session()->get('p1')['a15']) / 2;
        $data['ax'] = ($data['a1'] + $data['a2'] + $data['a3'] + $data['a4'] + $data['a5']) / 5;

        $data['b1'] = (session()->get('p2')['b1'] + session()->get('p2')['b2'] + session()->get('p2')['b3'] + session()->get('p2')['b4'] + session()->get('p2')['b5']) / 5;
        $data['bx'] = $data['b1'] / 1;

        $data['c1'] = (session()->get('p3')['c1'] + session()->get('p3')['c2'] + session()->get('p3')['c3'] + session()->get('p3')['c4'] + session()->get('p3')['c5'] + session()->get('p3')['c6'] + session()->get('p3')['c7']) / 7;
        $data['c2'] = (session()->get('p3')['c8'] + session()->get('p3')['c9']) / 2;
        $data['c3'] = (session()->get('p3')['c10'] + session()->get('p3')['c11']) / 2;
        $data['cx'] = ($data['c1'] + $data['c2'] + $data['c3']) / 3;

        $data['d1'] = (session()->get('p4')['d1'] + session()->get('p4')['d2']) / 2;
        $data['d2'] = (session()->get('p4')['d3'] + session()->get('p4')['d4'] + session()->get('p4')['d5']) / 3;
        $data['d3'] = (session()->get('p4')['d6'] + session()->get('p4')['d7'] + session()->get('p4')['d8']) / 3;
        $data['d4'] = (session()->get('p4')['d9'] + session()->get('p4')['d10']) / 2;
        $data['d5'] = (session()->get('p4')['d11'] + session()->get('p4')['d12']) / 2;
        $data['d6'] = (session()->get('p4')['d13'] + session()->get('p4')['d14'] + session()->get('p4')['d15']) / 3;
        $data['d7'] = (session()->get('p4')['d16'] + session()->get('p4')['d17']) / 2;
        $data['d8'] = (session()->get('p4')['d18'] + session()->get('p4')['d19']) / 2;
        $data['d9'] = (session()->get('p4')['d20'] + session()->get('p4')['d21']) / 2;
        $data['dx'] = ($data['d1'] + $data['d2'] + $data['d3'] + $data['d4'] + $data['d5'] + $data['d6'] + $data['d7'] + $data['d8'] + $data['d9']) / 9;
        return view('p5', $data);        
    }

    public function postPage5()
    {

        // return redirect()->route('home');        
    }



}
