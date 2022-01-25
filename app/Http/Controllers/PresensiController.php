<?php

namespace App\Http\Controllers;

use App\Models\Presensi;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Presensi::select()->get();

        return view('content.presensi.masuk');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.presensi.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Presensi;
        $data->nama = $request->presensi;
        $data->save();
        // dd($data); die;
        return redirect()->route('presensi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Presensi::find($id);
        // dd($data); die;
        return view('content.presensi.detail')->with(compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Presensi::find($id);
        // dd($data); die;
        return view('content.presensi.edit')->with(compact('data'));
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
        // dd($request);
        $data = Presensi::find($id);
        // dd($data);
        $data->nama=$request->nama;
        $data->save();
        // dd($data);
        return redirect()->route('presensi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Presensi::find($id);
        $data->delete();
        return redirect()->route('presensi.index');
    }
}
