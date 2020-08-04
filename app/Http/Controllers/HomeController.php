<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Action Methods
    public function Index()
    {

        // $a['fruit'] = ["Mango", "Apple", "Banana"];
        // $a['Sports'] = ['Cricket', 'Hockey', 'Baseball'];
        // return view("Home.Index", $a);



        $msg = "This is message from Controller";
        return view("Home.Index", compact('msg'));
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
