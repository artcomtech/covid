<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Covid;
use App\Model\Post;

class IndexController extends Controller
{

    public function index()
    {
    
    $footer = Post::where('parent','footer')->get();
    $dtcovid = Covid::first();
    $dtberita = Post::where('parent','berita')->where('others','publish')->get();
    $berita = Post::where('parent','berita')->where('others','publish')->first();
    $kontak = Post::where('parent','kontak')->where('title','callcenter')->first();
    return view('/pages/index',['covid'=>$dtcovid,'berita'=>$dtberita,'singleberita'=>$berita,'kontak'=>$kontak,'footer'=>$footer]);
    }
}
