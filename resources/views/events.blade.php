@extends('master')

@section('konten')

<div class="container-fluid mb-5" style="background-color: red; margin-top: -9px">
    <div class="container pl-1">
        <h3 class="mb-0 py-5"><strong>Acara Donor Darah</strong></h3>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-md-auto px-0">
            <button class="btn btn-danger p-3 shadow" style="border-radius: 10px 0 0 10px">Semua Acara</button>
        </div>
        <div class="col-md-auto px-0">
            <button class="btn btn-light p-3 shadow" style="border-radius: 0 10px 10px 0">Acara Mendatang</button>
        </div>
    </div>
</div>

<!-- Cards -->
<div class="container-fluid">
    <div class="col card-deck justify-content-center">
        @foreach ($events as $event)
        <div class="row-mb-5">
            <a class="card shadow mb-5 big" style="min-width: 253px; max-width: 350px" href="/event/{{ $event->id }}">
                <img src="{{ $event->image }}" style="background-color: #f1f3f298; max-height: 550px" class="card-img-top">
                <div class="card-body">
                    <h5 class="text-capitalize"><strong>{{ $event->title }}</strong></h5>
                    <ul class="list-group mt-3">
                        <li style="list-style: none" class="mb-2 text-capitalize">
                            <i class="bi bi-calendar3 mr-2" style="font-size:20px;"></i>
                            {{ date('l, d F Y', strtotime($event->date)) }}
                        </li>
                        <li style="list-style: none" class="mb-2 text-capitalize">
                            <i class="bi bi-geo-alt mr-2" style="font-size:20px;"></i>
                            {{ $event->location }}
                        </li>
                        <li style="list-style: none">
                            <i style="font-size:20px;" class="bi bi-person mr-2" ></i>
                            {{ $event->provider }}
                        </li>
                    </ul>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <br>
    <div class="container px-0">
        {{ $events->links() }}
    </div>
</div>

@endsection