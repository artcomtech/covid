<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Covid;
class CovidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Data Covid';
        $data = Covid::all();
        return view('admin.covid.index',['title'=>$title,'data'=>$data]);
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
        //
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
        $title = 'Form Edit Data Covid';
        $data = Covid::find($id);
        return view('admin.covid.edit',['title'=>$title,'data'=>$data]);
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
        $covid = Covid::find($id);

        $covid->jml_otg = $request->jml_otg;
        $covid->pantau = $request->pantau;
        $covid->selesai_pantau = $request->selesai_pantau;
        $covid->rawat_rs = $request->rawat_rs;
        $covid->rawat_rumah = $request->rawat_rumah;
        $covid->rawat_sembuh = $request->rawat_sembuh;
        $covid->rawat = $request->rawat;
        $covid->sembuh = $request->sembuh;
        $covid->meninggal = $request->meninggal;
        $covid->jml_perjalanan = $request->jml_perjalanan;
        $covid->jml_selesai = $request->jml_selesai;
        $covid->jml_pantau = $request->jml_pantau;

        $covid->save();
        return redirect()->intended(url('admin/covid'))->with('success','Data Covid berhasil diperbarui');
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
