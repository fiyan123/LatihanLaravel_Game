<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $game = Game::all();
        $perusahaan = Perusahaan::all();
        return view('game.index', compact('game', 'perusahaan'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $game = Game::all();
        $perusahaan = Perusahaan::all();
        return view('game.create', compact('game', 'perusahaan'));

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
            'nama_game' => 'required|unique:games',
            'nama_pembuat' => 'required',
            'tahun_dirilis' => 'required',
            'id_perusahaan' => 'required',
        ]);

        $game = new Game();
        $game->nama_game = $request->nama_game;
        $game->nama_pembuat = $request->nama_pembuat;
        $game->tahun_dirilis = $request->tahun_dirilis;
        $game->id_perusahaan = $request->id_perusahaan;
        $game->save();
        return redirect()->route('game.index')->with('success', 'Data berhasil dibuat!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Game::findOrFail($id);
        return view('game.show', compact('game'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = Game::findOrFail($id);
        $perusahaan = Perusahaan::all();
        return view('game.edit', compact('game', 'perusahaan'));
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
            'nama_game' => 'required|unique:games',
            'nama_pembuat' => 'required',
            'tahun_dirilis' => 'required',
            'id_perusahaan' => 'required',
        ]);

        $game = Game::findOrFail($id);
        $game->nama_game = $request->nama_game;
        $game->nama_pembuat = $request->nama_pembuat;
        $game->tahun_dirilis = $request->tahun_dirilis;
        $game->id_perusahaan = $request->id_perusahaan;
        $game->save();
        return redirect()->route('game.index')
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
        //
    }
}
