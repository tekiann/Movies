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
        if($data['Response']=='True'){
            return view("films.result", $data, ['nomeRequest' => $request->nome,'page' => 1 ]);
        }else{
            return view('films.search', ['visible' => "visible"]);
        }

    }
    public function pagination($nomeRequest,$page){

        $path = "http://www.omdbapi.com/?s=$nomeRequest&page=$page&apikey=e4108e";
        $json = file_get_contents($path);
        $data = json_decode($json, TRUE);
        if($data['Response']=='True'){
            return view("films.result", $data, ['nomeRequest' => $nomeRequest,'page' => $page ]);
        }else{
            return view('films.search', ['visible' => "visible"]);
        }

    }
    public function info($imdbID){
        $path = "http://www.omdbapi.com/?i=$imdbID&apikey=e4108e";
        $json = file_get_contents($path);
        $data = json_decode($json, TRUE);
        return view("films.info", ['result'=>$data]);
    }

}
