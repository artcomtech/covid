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
    if(!empty($dtcovid)){
        $covid = $dtcovid;
    }else{
        $covid = '';
    }
    $dtberita = Post::where('parent','berita')->where('others','publish')->offset(0)->limit(5)->get();
    $berita = Post::where('parent','berita')->where('others','publish')->first();
    if(!empty($berita)){
        $beritasingle = $berita;
    }else{
        $beritasingle = '';
    }
    $kontak = Post::where('parent','kontak')->where('title','callcenter')->first();
    if(!empty($kontak)){
        $kontaksingle = $kontak;
    }else{
        $kontaksingle = '';
    }
    return view('/pages/index',['covid'=>$covid,'berita'=>$dtberita,'singleberita'=>$beritasingle,'kontak'=>$kontaksingle,'footer'=>$footer]);
    }
}
