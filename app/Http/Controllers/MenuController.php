<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index($id){
    	$a=("menu".$id);
//    	echo $a;
    	return view($a);
    }
    public function hasil(){
    	return view('hasil');
    }

}
