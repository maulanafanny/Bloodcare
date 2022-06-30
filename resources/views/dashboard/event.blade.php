@extends('dashboard.dashboard')

@section('konten')
    
<br>

<div class="container mt-2">
    <h1 class="mb-4 text-capitalize">{{ $event->title }}</h1>
    <a href="{{ url()->previous() }}" style="border-radius: 10px" class="btn btn-dark mb-4 p-2 shadow"><i class="bi bi-arrow-left mr-2"></i>Kembali</a>
    <div class="row">
        <div class="col">
            <div class="card shadow" style="max-width: 500px">
                <img src="{{ asset($event->image) }}">
            </div>
        </div>
        <div class="col mt-5">
            <ul class="list-group mt-3 ml-3">
                <li style="list-style: none; font-size:25px;" class="mb-2 fs-3">
                    <i class="bi bi-calendar3 mr-2"></i>
                    <strong>Tanggal</strong> : 
                    {{ date('l, d F Y', strtotime($event->date)) }}
                </li>
                <li style="list-style: none; font-size:25px;" class="mb-2 fs-3">
                    <i class="bi bi-clock mr-2"></i>
                    <strong>Waktu</strong> : 
                    {{ date('H:i - ', strtotime($event->date)) }}
                    {{ date('H:i',strtotime('+2 hour',strtotime($event->date))) }}
                </li>
                <li style="list-style: none; font-size:25px;" class="mb-2 text-capitalize">
                    <i class="bi bi-geo-alt mr-2"></i>
                    <strong>Lokasi</strong> : 
                    {{ $event->location }}
                </li>
                <li style="list-style: none; font-size:25px;">
                    <i class="bi bi-person mr-2" ></i>
                    <strong> Penyelenggara</strong> : 
                    {{ $event->provider }}
                </li>
            </ul>
        </div>
    </div>
</div>

<br>
<br>

@endsection
