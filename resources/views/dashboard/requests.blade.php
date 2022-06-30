@extends('dashboard.dashboard')

@section('konten')
    
<br>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Permohonan</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="/dashboard/request/form" class="btn btn-sm btn-outline-success">Tambah Data Baru</a>
        </div>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Pasien</th>
                <th scope="col">Goldar</th>
                <th scope="col">Jenis Donor</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Rumah Sakit</th>
                <th scope="col">Tanggal Terdaftar</th>
                <th scope="col">Kontak</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>

            @php $i = 1; @endphp
            @foreach ($needs as $need)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $need->name }}</td>
                <td>{{ $need->blood }}</td>
                <td>{{ $need->type }}</td>
                <td>{{ $need->quantity }}</td>
                <td>{{ $need->hospital }}</td>
                <td>{{ date('l, d F Y', strtotime($need->date)) }}</td>
                <td>{{ $need->contact }}</td>
                <td class="text-center">
                    <a href="/dashboard/need/{{ $need->id }}" class="btn btn-sm btn-primary">
                        <span data-feather="eye"></span>
                    </a>
                    <a href="/dashboard/need" class="btn btn-sm btn-warning">
                        <span data-feather="edit-2"></span>
                    </a>
                    <form class="d-inline" action="{{ route('need.destroy', $need->id) }}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="btn btn-sm btn-danger m-1" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><span data-feather="trash-2"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection