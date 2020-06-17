<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Category;
use App\Tags;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
    public function index(Posts $posts){
        $category_widget = Category::all();
        $footer_tag = Tags::all();
    	$data = $posts->latest()->paginate(8);
        $dataSatu = Posts::Orderby('id', 'desc')->limit(1)->get();
        $dataDua = Posts::Orderby('id', 'asc')->limit(2)->get();

    	return view('blog', compact('data','category_widget','footer_tag', 'dataSatu', 'dataDua'));
    }

    public function isi_blog($slug){
        $category_widget = Category::all();
        $footer_tag = Tags::all();
    	$data = Posts::where('slug', $slug)->get();
    	return view('blog.isi_post', compact('data','category_widget','footer_tag'));
    }

    public function list_blog(){
        $category_widget = Category::all();
        $footer_tag = Tags::all();
        $data = Posts::latest()->paginate(6);
    	return view('blog.list_post', compact('data','category_widget','footer_tag'));
    }

    public function list_category(category $category){
        $category_widget = Category::all();
        $footer_tag = Tags::all();

        $data = $category->posts()->paginate();
        return view('blog.list_post', compact('data','category_widget','footer_tag'));
    }

    public function list_tag(tags $tags){
        $category_widget = Category::all();
        $footer_tag = Tags::all();

        $data = $tags->posts()->paginate();
        return view('blog.list_post', compact('data','category_widget','footer_tag'));
    }

    public function cari(request $request){
        $category_widget = Category::all();
        $footer_tag = Tags::all();
        $data = Posts::where('judul', $request->cari)->orWhere('judul','like','%'.$request->cari.'%')->paginate(6);
        return view('blog.list_post', compact('data','category_widget','footer_tag'));
    }

    public function pasien(){
        $category_widget = Category::all();
        $footer_tag = Tags::all();
        $data = Posts::all();
        $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $korona = $response->json();
        
        return view('blog.pasien', compact('data','category_widget','footer_tag','korona'));
    }

    public function hotline(){
        $category_widget = Category::all();
        $footer_tag = Tags::all();
        $data = Posts::all();

        return view('blog.hotline', compact('data','category_widget','footer_tag'));
    }
}
