<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class secondController extends Controller
{
    public function showstring(){
        $data = [];
        $data['id'] = 5;
        $data['name']= 'mohamed';
        return view('welcome',$data);

    }
}
