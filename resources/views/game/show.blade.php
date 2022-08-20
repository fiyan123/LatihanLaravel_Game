@extends('layouts.admin')
@section('content')
<br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary" align="center" style="color: white">
                        Data Game
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Game</label>
                            <input type="text" class="form-control" name="nama_game" value="{{ $game->nama_game }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Pembuat</label>
                            <input type="text" class="form-control" name="nama_pembuat" value="{{ $game->nama_pembuat}}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tahun Dirilis</label>
                            <input type="date" class="form-control " name="tahun_dirilis" value="{{ $game->tahun_dirilis }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Perusahaan Perilis</label>
                            <input type="text" class="form-control" name="id_perusahaan" value="{{ $game->perusahaan->nama_perusahaan }}"
                                readonly>

                        </div>

                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('game.index') }}" class="btn btn-info">Kembali</a>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection