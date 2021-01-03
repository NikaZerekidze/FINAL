<?php

namespace App\Http\Controllers\API;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class AuthController extends Controller
{
    public function registration(Request $request)
    {
    	$validation=$request->validate([
    		"name"=>"required|string|max:20",
    		"email"=>"required|email|max:50|unique:users",
    		'password'=>"required|string|min:8|confirmed"
    ]);
    	 

    	  $validation["password"]=bcrypt($request->password);
    	  $user=User::create($validation);
    	  $accessToken=$user->createToken("authToken")->accessToken;
    	  // return response(["user"=>$user,"accessToken"=>$accessToken]);

    
    }

    public function login(Request $request)
    {
    	  	$login=$request->validate([
    	  		"email"=>"required|email",
    	  		"password"=>"required"
    	  	]);

    	  	if(!auth()->attempt($login))
    	  	{
    	  		return response([
    	  			"message"=>"invalid"
    	  		]);
    	  	}

    	  	 $accessToken=auth::user()->createToken("authToken")->accessToken;
    	  	 // return response([
    	  	 // 	"user"=>auth::user(),
    	  	 // 	"access_token"=>$accessToken
    	  	 // ]);
            return redirect()->route("Adminindex");
    }
}
