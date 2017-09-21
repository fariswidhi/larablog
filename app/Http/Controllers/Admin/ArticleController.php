<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Routing;
use Validator;
use Illuminate\Http\Request;
use App\Article;
use App\Category;

class ArticleController extends Controller
{

    protected $folder = 'article';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function index()
    {
        //
        $datas = Article::all();
        return view('admin/'.$this->folder.'/index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/'.$this->folder.'/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validator         =    Validator::make($request->all(),[
                                'file'=>'image'
                                ]);

        if ($validator->fails()) {
            # code...
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $photoName = time().'.'.$request->file->getClientOriginalExtension();
        $request->file->move(public_path('uploads'), $photoName);

        $article           =   new Article;
        $article->title     =   $request->title;
        $article->content     =   $request->article;
        $article->photo     =   $photoName;
        $article->category_id     =   $request->category;
        
        $save               =   $article->save();
        if ($save) {
            return redirect('admin/'.$this->folder);
        }




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $article         = Article::find($id);
        $select          =  Article::with('category')->FindorFail($id);
        $idcat  = $select->category->pluck('id');
        $categories = Category::all();
        return view('admin/'.$this->folder.'/edit',compact('article','categories','idcat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

    $validator         =    Validator::make($request->all(),[
                                'file'=>'image'
                                ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }



        $article            =      Article::find($id);
        $article->title     =       $request->title;
        $article->content    =      $request->article;
        if (!empty($request->file)) {
        $photoName = time().'.'.$request->file->getClientOriginalExtension();
        $request->file->move(public_path('uploads'), $photoName);
        $article->photo     =       $photoName;

        }
        $article->category_id     =   $request->category;
        
        $save               =   $article->save();
        if ($save) {
            return redirect('admin/'.$this->folder);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $article  = Article::find($id);
        $delete    = $article->delete();
        if ($delete) {
            return redirect('admin/'.$this->folder);
        }
    }
}
