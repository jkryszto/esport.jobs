<?php

namespace App\Http\Controllers;

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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function test() 
    {
        $categories = array('Administrative', 'Business Development', 'Creative', 'Community Management', 'Customer Service', 'Data', 'Events', 'Marketing', 'Product Management', 'Production', 'Project Management', 'Software Engineering');

        // dd($categories);

        for($i = -1; $i++, $i < count($categories);)
        {
            echo $categories[$i];
        }
    }
}
