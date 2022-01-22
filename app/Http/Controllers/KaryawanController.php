<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Karyawan;
use App\Models\Shift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Karyawan::select()->get();
        $data = DB::select("SELECT a.id, a.name, (SELECT nama FROM department WHERE id = a.department) AS department, (SELECT nama from shift WHERE id = a.shift) AS shift FROM karyawan AS a");
        return view('content.karyawan.karyawan')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::select()->get();
        $shift = Shift::select()->get();
        return view('content.karyawan.add')->with(compact('department', 'shift'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Karyawan;
        $data->nik = $request->nik;
        $data->name = $request->nama;
        $data->alamat = $request->alamat;
        $data->no = $request->no;
        $data->email = $request->email;
        $data->department = $request->department;
        $data->shift = $request->shift;
        $data->uname = $request->uname;
        $data->pass = $request->pass;
        $data->save();
        // dd($data); die;
        return redirect()->route('karyawan.index');
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
        $data = Karyawan::find($id);
        $department = Department::select()->get();
        $shift = Shift::select()->get();
        // dd($data); die;
        return view('content.karyawan.edit')->with(compact('data', 'department', 'shift'));
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
        $data = Karyawan::find($id);
        // dd($data);
        $data->nik = $request->nik;
        $data->name = $request->nama;
        $data->alamat = $request->alamat;
        $data->no = $request->no;
        $data->email = $request->email;
        $data->department = $request->department;
        $data->shift = $request->shift;
        $data->uname = $request->uname;
        $data->pass = $request->pass;
        $data->save();
        // dd($data);
        return redirect()->route('karyawan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Karyawan::find($id);
        $data->delete();
        return redirect()->route('karyawan.index');
    }
}
