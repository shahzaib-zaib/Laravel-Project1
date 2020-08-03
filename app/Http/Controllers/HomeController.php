<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Action Methods
    public function Index()
    {
        return view("Home.Index", ["Stuname" => "Amna", "Stuname2" => "Maheen", "Stuname3" => "Sara"]);
    }
    public function About()
    {
        return view("Home.About");
    }
    public function Contact()
    {
        return view("Home.Contact");
    }
}
