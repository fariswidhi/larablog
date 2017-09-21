<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

    protected $folder = 'category';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function index()
    {
        //
        $datas = Category::paginate(10);
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
      
        $find = Category::where('category',$request->name)->get();
        if(count($find) ==0){
            $category           =   new Category;
             $category->category     =   $request->name;
             $save               =   $category->save();
             if ($save) {
            return redirect('admin/'.$this->folder);
            }
        }
        else{
            return redirect()->back()->withInput()->with('error','Category Name Error');
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
        $category         = Category::find($id);
        return view('admin/'.$this->folder.'/edit',compact('category'));
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
        $category       = Category::find($id);
        $category->category =   $request->name;
        $save           = $category->save();

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
        $category  = Category::find($id);
        $delete    = $category->delete();
        if ($delete) {
            return redirect('admin/'.$this->folder);
        }
    }
}
