<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')->with('posts', Post::simplePaginate(1));
    }

    public function show($id)
    {
        return view('post')->with('post', Post::find($id));
    }

    public function lang($local)
    {
        Session::put('lang', $local);
        return redirect()->back();
    }
}
