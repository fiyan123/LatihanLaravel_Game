<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perusahaan = Perusahaan::all();
        return view('perusahaan.index', compact('perusahaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perusahaan = Perusahaan::all();
        // dd($perusahaan);
        // return $perusahaan;
        return view('perusahaan.create', compact('perusahaan'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'nama_perusahaan' => 'required|unique:perusahaans',
            'tahun_berdiri' => 'required',
        ]);

        $perusahaan = new Perusahaan();
        $perusahaan->nama_perusahaan = $request->nama_perusahaan;
        $perusahaan->tahun_berdiri = $request->tahun_berdiri;
        $perusahaan->save();
        return redirect()->route('perusahaan.index')
            ->with('success', 'Data berhasil ditambah!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perusahaan = Perusahaan::findOrFail($id);
        return view('perusahaan.show', compact('perusahaan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perusahaan = Perusahaan::findOrFail($id);
        return view('perusahaan.edit', compact('perusahaan'));

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
        // Validasi
        $validated = $request->validate([
            'nama_perusahaan' => 'required|unique:perusahaans',
            'tahun_berdiri' => 'required',
        ]);

        $perusahaan = Perusahaan::findOrFail($id);
        $perusahaan->nama_perusahaan = $request->nama_perusahaan;
        $perusahaan->tahun_berdiri = $request->tahun_berdiri;
        $perusahaan->save();
        return redirect()->route('perusahaan.index')
            ->with('success', 'Data berhasil diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $perusahaan = Perusahaan::findOrFail($id);
        $perusahaan->delete();
        return redirect()->route('perusahaan.index')
            ->with('success', 'Data berhasil dihapus!');

    }
}
