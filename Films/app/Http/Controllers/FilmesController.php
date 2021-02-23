<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function create(){
        return view('films.search');
    }
    public function search(Request $request){
        $request->nome=str_replace(" ", "_",$request->nome);
        $path = "http://www.omdbapi.com/?s=$request->nome&apikey=e4108e";
        $json = file_get_contents($path);
        $data = json_decode($json, TRUE);

        return view("films.result", $data);
    }

}
