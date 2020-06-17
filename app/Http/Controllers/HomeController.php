<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Category;
use App\Tags;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Posts::count();
        $tag = Tags::count();
        $category = Category::count();
        $now = Carbon::now()->toDateTimeString();

        return view('home', compact('data', 'tag', 'category', 'now'));
    }

    public function chart(){
        $post = Posts::all();

        $data = [];

        foreach($post as $posts){
            $data = $posts->count;
        }

        return view('home', compact('data'));
    }

}
