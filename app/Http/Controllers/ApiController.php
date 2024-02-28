<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ApiController extends Controller
{
    public function load(Request $request){
        if($request->isMethod('post')){
            $title = $request->music_title;
            $musician = $request->musician;
            
            if($request->hasFile('cover') and $request->hasFile('music') and $request->music_title and $request->musician) {
                $file = $request->file('music');
                $file_cover = $request->file('cover');
                $file_cover_name = $_FILES["cover"]["name"];
                $file_cover->move(public_path() . '/cover', $file_cover_name);
                $file_name = $_FILES["music"]["name"];
                $file->move(public_path() . '/music',$file_name);
                DB::insert("INSERT INTO music (song_name, musician, file_name, file_cover) VALUES ('$title', '$musician', '$file_name', '$file_cover_name')");
                //Записываем в базу данных название песни и файла к ней 
                return redirect("/download")->with("status", 200);
            }
         }
    }
}
