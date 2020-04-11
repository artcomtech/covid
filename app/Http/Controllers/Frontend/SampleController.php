<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\Post;
use Illuminate\Http\Request;

class SampleController extends Controller
{

    public function infografik()
    {
        $footer = Post::where('parent','footer')->get();
        return view('/pages/infografik/index',['footer'=>$footer]);
    }

    public function dokumen()
    {
        $footer = Post::where('parent','footer')->get();
        return view('/pages/publikasi/dokumen',['footer'=>$footer]);
    }
    public function pers()
    {
        $footer = Post::where('parent','footer')->get();
        return view('/pages/publikasi/pers',['footer'=>$footer]);
    }
    public function laporan()
    {
        $footer = Post::where('parent','footer')->get();
        return view('/pages/publikasi/laporan',['footer'=>$footer]);
    }
    public function pencegahan()
    {
        $footer = Post::where('parent','footer')->get();
        return view('/pages/pencegahan/index',['footer'=>$footer]);
    }

}
