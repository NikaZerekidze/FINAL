<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Languages;
use App\News;
use App\Services\LanguageService;
use App\Services\NewsService;
use Session;
class LanguageController extends Controller
{
   
    public function index($language)
    {
    	LanguageService::setLocale($language);
        return Session::get("language");
        // return Category::where("language_id",LanguageService::getLanguageId($language))->get();
    }

    public function news($language)
    {
    	// $language_id=Languages::where("slug",$language)->firstorfail()["id"];
    	// return News::where("language_id",$language_id)->get();
    	 return NewsService::getNewsByLanguage($language); 
    }

    public function changeLanguage()
    {
         return LanguageService::setLocale(); 
    }


    public function create()
    {
        //
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
    }
}
