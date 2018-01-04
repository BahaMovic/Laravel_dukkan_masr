<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
class newsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = News::get();

        return view('admin.pages.news.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.news.add');
    }
    
    function imageEdit($image)
    {
        try {
        $imageName = date('d-m-y-h-s').$image->getClientOriginalName();
        $path = base_path().'\public\images\\';
       $image->move($path , $imageName);
        return 'images\\'.$imageName;
            } catch (Exception $e) {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
            }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        News::create([
            'title'=>$request['title'],
            'description'=>$request['description'],
            'image'=>$this->imageEdit($request['image'])
        ]);
        return redirect('admin/show/news');
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
        $data = News::where('id','=',$id)->get()->first();
        return view('admin.pages.news.edit',compact('data'));
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
        if($request['image'] !== null)
        { News::where('id','=',$id)->update([
            'title'=>$request['title'],
            'image'=>$this->imageEdit($request['image']),
            'description'=>$request['description']
        ]);
}else
{
   News::where('id','=',$id)->update([
            'title'=>$request['title'],
            'description'=>$request['description']
        ]); 
}
       
         return redirect('admin/show/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       News::where('id','=',$id)->delete();
         return redirect('admin/show/news');
    }
}
