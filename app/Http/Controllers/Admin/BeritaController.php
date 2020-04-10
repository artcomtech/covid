<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use Intervention\Image\ImageManagerStatic as Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;

use App\Model\Post;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Data Berita';
        $data = Post::where('parent','berita')->get();
        return view('admin.berita.index',['title'=>$title,'data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Form Berita';
        return view('admin.berita.create',['title'=>$title]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $berita = new Post();
        $berita->parent = 'berita';
        $berita->subparent = '';
        $berita->title = $request->title;
        $berita->content = $request->content;
        $berita->description = $request->description;
        $berita->others = $request->others;
        $image = $request->file('file');
        $input['file'] = time().'.webp';
     
        $destinationPath = public_path('/images/post');
        $img = Image::make($image->path());
        $img->resize(null, 200, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('webp', 50)->save($destinationPath.'/'.$input['file']);
   
        $destinationPath = public_path('/images/post');
        $image->move($destinationPath, $input['file']);

        $berita->file =  $input['file'];
        $berita->save();

        return redirect()->intended(url('admin.berita'))->with('success','Berita berhasil ditembahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
