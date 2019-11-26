<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;


class TweetController extends Controller
{
    public function index()
    {
        $tweets = Tweet::all();

        return view('tweets.index',[
            'tweets' => $tweets,
        ]);
    }

    public function create() 
    {
        return view('tweets.create');
    }

    public function store(Request $request)
    {
        $params = $request->validate([
            'text' => 'required|max:2000',
            'user_id' => 'required',
        ]);


        Tweet::create($params);

        return redirect()->route('tweets.index');
    }
}
