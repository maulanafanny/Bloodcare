@extends('dashboard.dashboard')

@section('konten')

<br>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Hasil Tes Darah Pendonor</h1>
</div>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Email User</th>
                <th scope="col">Goldar</th>
                <th scope="col">Rhesus</th>
                <th scope="col">Tekanan Darah</th>
                <th scope="col">Hemoglobin</th>
                <th scope="col">Tanggal Tes</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            
            @php $i = 1; @endphp
            @foreach ($users as $user)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                @if (is_null($user->report))
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>Belum Melakukan Tes</td>
                    <td class="text-center">
                        <a href="/dashboard/user" class="btn btn-sm btn-success">Tambah Hasil Tes</a>
                    </td>
                @else
                    <td>{{ $user->report->blood }}</td>
                    <td>{{ $user->report->rhesus }}</td>
                    <td>{{ $user->report->pressure }}</td>
                    <td>{{ $user->report->hemo }}</td>
                    <td>{{ date('l, d F Y', strtotime($user->report->date)) }}</td>
                    <td class="text-center">
                        <a href="/dashboard/user/{{ $user->id }}" class="btn btn-sm btn-primary">
                            <span data-feather="eye"></span>
                        </a>
                        <a href="/dashboard/user" class="btn btn-sm btn-warning">
                            <span data-feather="edit-2"></span>
                        </a>
                        <form class="d-inline" action="{{ route('user.destroy', $user->report->id) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-sm btn-danger m-1" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><span data-feather="trash-2"></span></button>
                        </form>
                    </td>
                @endif
            </tr>
            @endforeach

        </tbody>
    </table>
</div>


@endsection