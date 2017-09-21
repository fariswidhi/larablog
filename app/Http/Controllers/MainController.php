<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class MainController extends Controller
{
    //
    public function index(){
    	$datas = Article::all();

    	return view('main',compact('datas'));
    }

    public function show($id){
    	$data = Article::find($id);
    	return view('show',compact('data'));
    }
}
