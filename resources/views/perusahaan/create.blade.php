@extends('layouts.admin')
@section('content')
<br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-dark">
                    <div class="card-header bg-primary" align="center" style="color: white" >
                        Data Dari Perusahaan
                    </div><br>
                    <div class="card-body">
                        <form action="{{ route('perusahaan.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">NAMA PERUSAHAAN</label>
                                <input type="text" class="form-control  @error('nama_perusahaan') is-invalid @enderror"
                                    name="nama_perusahaan">
                                @error('nama_perusahaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">TAHUN BERDIRI</label>
                                <input type="date" class="form-control  @error('tahun_berdiri') is-invalid @enderror"
                                    name="tahun_berdiri">
                                @error('tahun_berdiri')
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