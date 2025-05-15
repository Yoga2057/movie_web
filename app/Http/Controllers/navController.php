<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class navController extends Controller
{
    public function home()
    {
        return view( 'home',  ['key'=>'home']);
    }

    public function movie()
    {
        $mv = Movie::orderBy('id','desc')->get();
        return view( 'movie', ['key'=>'Movie','mv' => $mv]);
    }

    public function kategori(){
        return view('kategori', ['key'=>'Kategori']);
    }

    public function genre()
    {
        return view( 'genre', ['key'=>'genre']);
    }
}
