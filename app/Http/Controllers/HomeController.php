<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Action Methods
    public function Index()
    {

        // $msg = "This is message from Controller using compact function";
        // return view("Home.Index", compact("msg"));



        // name direct
        // $a['fruit'] = ["Mango", "Apple", "Banana"];
        // $a['Sports'] = ['Cricket', 'Hockey', 'Baseball'];
        // return view("Home.Index", $a);


        // compact function
        //$msg = "This is message from Controller";
        //$name = "Maheen";
        //$fruit = array('Apple', 'mango', 'Banana');
        //return view("Home.Index", compact('msg', 'name', 'fruit'));


        // with functions
        //$msg = "This is message from Controller using with function";
        //return view("Home.Index")->with('message',$msg);


        return view("Home.Index");
    }
    public function Product()
    {
        return view("Home.Product");
    }
    public function About()
    {
        // Name Array for use show two or more tabel data from table in one view
        $Data["sports"] = ["Cricket", "Hockey", "Football", "Tennis"];
        $Data["color"] = ["Red", "Yellow", "Pink"];
        return view("Home.About", $Data);
    }
    public function Contact()
    {
        return view("Home.Contact");
    }
    public function Complain()
    {
        $data = "Pakistan";
        $color = array("Red", "Yellow", "Orange");

        return view("Home.Complain", compact("data", "color"));
    }
}
