<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        $name = '';
        $age = '';

        $programs =[
            ['id' => 1, 'code' => 'BSCS', 'name' => 'BS Computer Science', 'college' => 'College of Computing', 'slots' => 50, 'is_active' => 1],
            ['id' => 2, 'code' => 'BSIT', 'name' => 'BS Information Technology', 'college' => 'College of Computing', 'slots' => 40, 'is_active' => 1],
            ['id' => 3, 'code' => 'BSIS', 'name' => 'BS Information Systems', 'college' => 'College of Computing', 'slots' => 45, 'is_active' => 0],
            ['id' => 4, 'code' => 'BSEntrep', 'name' => 'BS Entrepreneurship', 'college' => 'College of Business', 'slots' => 60, 'is_active' => 1],
            ['id' => 5, 'code' => 'BSTM', 'name' => 'BS Tourism Management', 'college' => 'College of Tourism', 'slots' => 75, 'is_active' => 1],
            
        ];

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
        