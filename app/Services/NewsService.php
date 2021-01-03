<?php

namespace App\Services;
use \App\Languages;
use \App\News;
// use App\Services\LanguageService; თურმე არ ჭირდება რადგან ერთ ნეიმსფეისში არიან;
class NewsService
{
	
	static public function getNewsByLanguage($slug)
	{
		return News::where("language_id",LanguageService::getLanguageId($slug))->get();
	}
}