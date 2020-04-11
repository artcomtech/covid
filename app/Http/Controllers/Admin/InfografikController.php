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

class InfografikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Data Inforgrafik';
        $data = Post::where('parent','infografik')->get();
        return view('admin.infografik.index',['title'=>$title,'data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'required|file|image|mimes:jpeg,png,jpg,PNG,JPEG,JPG|max:4048'
          ], [
            'title.required' => 'Judul tidak boleh kosong',
            'file.image'    => 'File harus gambar',
            'file.mimes'    => 'File extensi JPEG, JPG, PNG yang diizinkan'
        ]);
          
        $infografik = new Post();
        $infografik->parent = 'infografik';
        $infografik->subparent = '';
        $infografik->title = $request->title;
        $image = $request->file('file');
        $input['file'] = time().'.jpg';
     
        $destinationPath = public_path('/images/post');
        $img = Image::make($image->path());
        $img->resize(null, 200, function ($constraint) {
            $constraint->aspectRatio();
        })->encode('jpg', 50)->save($destinationPath.'/'.$input['file']);
   
        $destinationPath = public_path('/images/post');
        $image->move($destinationPath, $input['file']);

       $infografik->file =  $input['file'];
       $infografik->save();

        return redirect()->intended(url('admin/infografik'))->with('success','Infografik berhasil ditambahkan');
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
        $dtpost = Post::find($id);
        if(\File::exists(public_path('images/post/'.$dtpost->file))){

            \File::delete(public_path('images/post/'.$dtpost->file));
        }
        $delete = Post::where('id', $id)->delete();
        return redirect()->intended(url('admin/infografik'))->with('success','Infografik berhasil dihapus');
    }
}
