<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function load(Request $request){
        if($request->isMethod('post')){
            $title = $request->music_title;
            $musician = $request->musician;
            
            if($request->hasFile('music') and $request->music_title and $request->musician) {
                $file = $request->file('music');
                $file_name = $_FILES["music"]["name"];
                $file->move(public_path() . '/music',$file_name);
                $date = $_SERVER['REQUEST_TIME'];
                DB::insert("INSERT INTO music (created_at, song_name, musician, file_name) VALUES ('$date', '$title', '$musician', '$file_name')");
                //Записываем в базу данных название песни и файла к ней 
            }
         }
    }
}
