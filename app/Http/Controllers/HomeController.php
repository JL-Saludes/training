<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        $name = '';
        $age = '';

        $programs = Program::all();

        return view('welcome', compact('name', 'age', 'programs'));
    }

    public function request(Request $request) {

        $uri = $request->path();
        $url = $request->url();
        $fullurl = $request->fullUrl();
        $method = $request->method();
        $ip = $request->ip();
        //$name = 

        $name = $request->query('name', '');

        //return 'Path: ' . $uri . '<br>URL: ' . $url . '<br>Full URL: ' . $fullurl . '<br>METHOD: ' . $method . '<br>IP Address: ' . $ip;
        return redirect()->route('home')->with('success', 'Form submitted successfully');
    }
    
    public function apply()
    {
        return view('apply');
    }


    public function sampleform()
    {
        return view('form.form');
    }


}
        