@extends('layouts.admin')
@section('content')
<br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header bg-primary" align="center" style="color: white">
                        Data Game
                    </div>
                    <div class="card-body">
                        <form action="{{ route('game.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Game</label>
                                <input type="text" class="form-control  @error('nama_game') is-invalid @enderror"
                                    name="nama_game">
                                @error('nama_game')
                                    <span class="invalid-feedback" role="alert">~
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nama Pembuat</label>
                                <input type="text" class="form-control  @error('nama_pembuat') is-invalid @enderror"
                                    name="nama_pembuat">
                                @error('nama_pembuat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tahun Dirilis</label>
                                <input type="date" class="form-control  @error('tahun_dirilis') is-invalid @enderror"
                                    name="tahun_dirilis">
                                @error('tahun_dirilis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Perusahaan Perilis</label>
                                <select name="id_perusahaan" class="form-control @error('id_perusahaan') is-invalid @enderror"
                                    id="">
                                    @foreach ($perusahaan as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_perusahaan }}</option>
                                    @endforeach
                                </select>
                                @error('id_perusahaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection