@extends('dashboard.dashboard')

@section('konten')

<br>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Daftar Acara</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="/dashboard/event/form" class="btn btn-sm btn-outline-success">Tambah Data Baru</a>
        </div>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Acara</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Waktu</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Penyelenggara</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @php $i = 1; @endphp
            @foreach ($events as $event)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $event->title }}</td>
                <td>{{ date('l, d F Y', strtotime($event->date)) }}</td>
                <td>
                    {{ date('H:i - ', strtotime($event->date)) }}
                    {{ date('H:i',strtotime('+2 hour',strtotime($event->date))) }}
                </td>
                <td>{{ $event->location }}</td>
                <td>{{ $event->provider }}</td>
                <td class="text-center">
                    <a href="/dashboard/event/{{ $event->id }}" class="btn btn-sm btn-primary">
                        <span data-feather="eye"></span>
                    </a>
                    <a href="/dashboard/event" class="btn btn-sm btn-warning">
                        <span data-feather="edit-2"></span>
                    </a>
                    <form class="d-inline" action="{{ route('event.destroy', $event->id) }}" method="POST">
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