@extends('layouts.admin')
@section('content')
<br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-secondary">
                    <div class="card-header bg-primary" align="center" style="color: white">
                        Data Nama Game
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA GAME</th>
                                        <th>NAMA PEMBUAT</th>
                                        <th>TAHUN DIRILIS</th>
                                        <th>PERUSAHAAN PERILIS</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($game as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama_game }}</td>
                                            <td>{{ $data->nama_pembuat }}</td>
                                            <td>{{ $data->tahun_dirilis }}</td>
                                            <td>{{ $data->perusahaan->nama_perusahaan }}</td>
                                            <td>
                                                <form action="{{ route('game.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('game.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-success">
                                                        Ubah
                                                    </a> |
                                                    <a href="{{ route('game.show', $data->id) }}"
                                                        class="btn btn-sm btn-outline-info">
                                                        Lihat
                                                    </a> |
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Apakah Anda Yakin?')">Delete
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