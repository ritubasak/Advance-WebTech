<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('home');
    }

    public function profile(){
        $name = "Name : Ritu Basak";
        $id =   "ID :19-40179-1";
        $dob = "Date Of Birth : 08-02-2000";
        $names = array("Ritu Basak", "Om Basak", "Shibom Basak");
        return view('profile')
        ->with('name', $name)
        ->with('id', $id)
        ->with('dob', $dob)
        ->with('names', $names);
    }

    public function product(){

        $p1 = "Product 1 :";
        $p2 = "Product 2 :";
        $p3 = "Product 3 :";
        $p4 = "Product 4 :";
        $info1 = array("Name : Advance WebTech Book", "Code : 40179", "Price : 500 TK");
        $info2 = array("Name : Advance Database", "Code : 50179", "Price : 400 TK");
        $info3 = array("Name : Advance C#", "Code : 60179", "Price : 530 TK");
        $info4 = array("Name : Advance Java", "Code : 70179", "Price : 650 TK");
         
        return view('product')
        ->with('p1', $p1)
        ->with('p2', $p2)
        ->with('p3', $p3)
        ->with('p4', $p4)
        ->with('info1', $info1)
        ->with('info2', $info2)
        ->with('info3', $info3)
        ->with('info4', $info4);
    }

    public function Ourteams(){
        $names = array("Member 1 : Ritu Basak", "Member 2 : Shaheen Alam Jony", "Member 3 : Faria Hossain Borna", "Member 4 : Junayed Kabir Fahim");
        return view('Ourteams')
        ->with('names', $names);
    }

    public function aboutus(){
        return view('aboutus');
    }

    public function contactus(){
        return view('contactus');
    }
}
