@extends('layouts.admin')
@section('content')
<br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-dark">
                    <div class="card-header bg-primary" align="center" style="color: white">
                        Data Perusahaan Game
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA PERUSAHAAN</th>
                                        <th>TAHUN BERDIRI</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($perusahaan as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama_perusahaan}}</td>
                                            <td>{{ $data->tahun_berdiri }}</td>
                                            <td>
                                                <form action="{{ route('perusahaan.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('perusahaan.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Ubah
                                                    </a> |
                                                    <a href="{{ route('perusahaan.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-info">
                                                        Lihat
                                                    </a> |
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')">Hapus
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection