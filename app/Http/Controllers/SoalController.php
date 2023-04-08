<?php

namespace App\Http\Controllers;

use App\Models\SoalModel;
use Illuminate\Http\Request;


class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=SoalModel::all();
        //$id=0;

        // return view('mahasiswa');
        return view('soal.index', compact('data'));
        //
    }
    public function edit($id){

        $tabel_soal=SoalModel::find($id);

        //dd($tabel_remidi1);
        return view('soal.soaledit',compact('tabel_soal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('soal.soalform');
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
            'nama_mk' => 'required|min:5',
            'dosen' => 'required',
            'jumlah' => 'required',
            'keterangan' => 'required|integer',
        ]);
        $create=SoalModel::create($request->all());
        // dd($create);
        return redirect()->route('soal.index');
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tabel_soal =SoalModel::findOrFail($id);

        $tabel_soal->nama_soal = $request->nama_soal;
        $tabel_soal->dosen = $request->dosen;
        $tabel_soal->jumlah = $request->jumlah;
        $tabel_soal->keterangan = $request->keterangan;

        $tabel_soal->save();

        if ($tabel_soal) {
            return redirect()->route('soal.index');
        }
       // dd($request->all());
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
        $tabel_soal = Soalmodel::findOrFail($id);
        $tabel_soal->delete();

        if ($tabel_soal) {
            return redirect()->route('soal.soal');
        }

        //
    }
}
