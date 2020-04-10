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


class PersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Data Pers';
        $data = Post::where('parent','pers')->get();
        return view('admin.pers.index',['title'=>$title,'data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Form Pers';
        return view('admin.pers.create',['title'=>$title]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pers = new Post();
        $pers->parent = 'pers';
        $pers->subparent = '';
        $pers->title = $request->title;
        $pers->content = $request->content;
        $pers->description = $request->description;
        $pers->others = $request->status;
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
    
            $pers->file =  $input['file'];
        }else{
            $pers->file =  $request->url_youtube;
        }
       
        $pers->save();

        return redirect()->intended(url('admin/pers'))->with('success','Pers berhasil ditambahkan');
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
        return redirect()->intended(url('admin/pers'))->with('success','Pers berhasil dihapus');
    }
}
