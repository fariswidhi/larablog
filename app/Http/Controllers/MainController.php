<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;

class MainController extends Controller
{
    //
    public function index(){
    	$datas = Article::paginate(10);

    	return view('main',compact('datas'));
    }

    public function show($category,$id){
    	$data = Article::find($id);
    	return view('show',compact('data'));
    }

    public function category($category){
        $category = Category::where('category',$category)->first();
    	$datas = Article::where('category_id',$category->id)->paginate(10);

    	return view('category',compact('datas','category'));
    }

    public function search(Request $request){
        $datas = Article::where('title','LIKE','%'.$request->q.'%')->paginate(10);
        return view('search',compact('datas'))->with('search',$request->q);
    }
}

