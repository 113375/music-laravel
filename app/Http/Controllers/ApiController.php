<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function load(Request $request){
        if($request->isMethod('post')){

            if($request->hasFile('music')) {
                $file = $request->file('music');
                $file_name = $_FILES["music"]["name"];
                $file->move(public_path() . '/music',$file_name);
            }
         }
    }
}
