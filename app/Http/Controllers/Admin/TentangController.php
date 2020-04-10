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

class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Data Tentang Covid 19 ';
        $data = Post::where('parent','tentang')->get();
        return view('admin.tentangcovid.index',['title'=>$title,'data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Form Berita';
        return view('admin.tentangcovid.create',['title'=>$title]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tentang = new Post();
        $tentang->parent = 'tentang';
        $tentang->subparent = $request->kategori;
        $tentang->title = $request->title;
        $tentang->content = $request->content;
        $tentang->others = $request->status;
        if(!empty($request->file('file'))){
            $image = $request->file('file');
            $input['file'] = time().'.webp';
         
            $destinationPath = public_path('/images/post');
            $img = Image::make($image->path());
            $img->resize(null, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->encode('webp', 50)->save($destinationPath.'/'.$input['file']);
       
            $destinationPath = public_path('/images/post');
            $image->move($destinationPath, $input['file']);
    
            $tentang->file =  $input['file'];
    
        }
        $tentang->save();

        return redirect()->intended(url('admin/tentang'))->with('success','Tentang berhasil ditambahkan');
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
        $title = 'Form Edit Tentang';
        $data = Post::find($id);
        return view('admin.tentangcovid.edit',['title'=>$title,'data'=>$data]);
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
        $tentang =Post::find($id);
        $tentang->parent = 'tentang';
        $tentang->subparent = $request->kategori;
        $tentang->title = $request->title;
        $tentang->content = $request->content;
        $tentang->others = $request->status;
        if(!empty($request->file('file'))){
            if(\File::exists(public_path('images/post/'.$tentang->file))){

                \File::delete(public_path('images/post/'.$tentang->file));
            }
            $image = $request->file('file');
            $input['file'] = time().'.webp';
         
            $destinationPath = public_path('/images/post');
            $img = Image::make($image->path());
            $img->resize(null, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->encode('webp', 50)->save($destinationPath.'/'.$input['file']);
       
            $destinationPath = public_path('/images/post');
            $image->move($destinationPath, $input['file']);
            $tentang->file =  $input['file'];
        }
    
        $tentang->save();

        return redirect()->intended(url('admin/tentang'))->with('success','Tentang berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtpost = Post::find($id);
        if(\File::exists(public_path('images/post/'.$dtpost->file))){

            \File::delete(public_path('images/post/'.$dtpost->file));
        }
        $delete = Post::where('id', $id)->delete();
        return redirect()->intended(url('admin/tentang'))->with('success','Berita berhasil dihapus');
    }
}
