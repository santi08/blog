<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Article;

class TestController extends Controller
{
    //

    public function view($id){

    	$article= Article::find($id);
    
    	
    		$article->category;
    		$article->user;
    		$article->tags;
    		//dd($article);

    		//llamado a la vista 
    		return view('test.index', ['article' => $article]);
    	
    }
}
