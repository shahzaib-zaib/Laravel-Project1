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



        //$msg = "This is message from Controller";
        //$name = "Maheen";
        //$fruit = array('Apple', 'mango', 'Banana');
        //return view("Home.Index", compact('msg', 'name', 'fruit'));



        // with functions
        $msg = "This is message from Controller using with function";
        return view("Home.Index")->with('message',$msg);
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
