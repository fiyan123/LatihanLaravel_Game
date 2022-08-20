@extends('layouts.admin')
@section('content')
<br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header bg-primary" align="center" style="color: white">
                        Data Dari Perusahaan
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Perusahaan</label>
                            <input type="text" class="form-control " name="nama_perusahaan" value="{{ $perusahaan->nama_perusahaan }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tahun Berdiri</label>
                            <input type="date" class="form-control " name="tahun_berdiri" value="{{ $perusahaan->tahun_berdiri }}" readonly>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('perusahaan.index') }}" class="btn btn-info" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection