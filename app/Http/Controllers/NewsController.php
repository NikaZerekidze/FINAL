<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\News;
use File;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $news=News::get();
        return view("newLayouts.index",["news"=>$news]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("newLayouts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Input::file("image")) {
            $destination=public_path("image");
            $filename=uniqid().".jpg";
            $img=Input::File("image")->move($destination,$filename);
            
        }

        News::create([
            "title"=>$request->input('title'),
            "description"=>$request->input('description'),
            "short_description"=>$request->input('short_description'),
            "upload_time"=>$request->input('time'),
            "image"=>$filename
        ]);

        return redirect()->route("Adminindex");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $result=News::where("id",$id)->firstOrFail(); 
        // $comments=Comments::where("product_id",$id)->get();
        return view("newLayouts.show",["result"=>$result]); 
        //,"comments"=>$comments
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result=News::where("id",$id)->firstOrFail(); 
        return view("newLayouts.edit",["result"=>$result]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        News::where("id",$request->input("id"))->update([
            "title"=>$request->input('title'),
            "description"=>$request->input('description')
        ]);
        return redirect()->route("Adminindex");
    }

    public function delete(Request $request)
    {
        News::where("id",$request->input("id"))->delete();
        return redirect()->back();
    }
}
