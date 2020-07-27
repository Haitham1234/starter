<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstController extends Controller
{
 

    public function showstring(){
        $data = ['ahmed', 'mohamed'];
        return view('welcome',compact('data')) ;

    }
}
