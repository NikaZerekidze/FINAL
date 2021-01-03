<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;
class NewsController2 extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        $news=News::get();
        return view("newLayouts.index",["news"=>$news]);

    }
}
