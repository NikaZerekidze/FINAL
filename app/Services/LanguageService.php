<?php

namespace App\Services;
use \App\Languages;
use \Session;

class LanguageService
{
	
	static public function getLanguageId($slug)
	{
		 if($slug == "")
		 {
		 	$slug=config("app.locale");
		 }
		 return Languages::where("slug",$slug)->firstorfail()["id"];
	}

	static public function setLocale($slug)
	{
		if(in_array($slug, Languages::pluck("slug")->toArray()))
		{
			Session::put("language", $slug);
		}
		return $slug=config("app.locale");
	}

	static public function checkLanguage($slug)
	{
		if(!empty(Session::get("language")))
        {
            if($slug!==Session::get("language"))
            {
                 LanguageService::setLocale($slug);
            }
        }
        else
        {
             LanguageService::setLocale($slug);
        }
        
	}

	static public function getLanguage()
	{
		if(!empty(Session::get("language")))
		{
			return Session::get("language");
		}
		else
		{
			return config("app.locale");
		}
	}
}