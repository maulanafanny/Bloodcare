@extends('master')

@section('konten')

<script>
    $(document).ready(function () {
        document.body.style.backgroundColor = "#eff1f5";
    });
</script>

<div class="container-fluid" style="background-color: red; margin-top: -9px">
    <div class="container">
        <h3 class="mb-0 py-5"><strong>Pencarian Kebutuhan Pendonor Darah</strong></h3>
    </div>
</div>

<br><br>

<div class="container">
    <div class="row">

        @foreach ($needs as $need)
        <div class="col-lg-6">
            <a href="/need/{{ $need->id }}" class="card shadow-sm mb-5 needcard">
                <div class="card-body">
                    <h4 class="mb-3">
                        <span class="p-2 badge badge-dark rounded mr-2" style="background-color: #dc3545">
                            <p class="font-weight-bold my-0 text-capitalize">#BLC_URGENT</p>
                        </span>
                        <span class="p-2 badge rounded" style="background-color: #d1d1d1">
                            <p class="font-weight-bold my-0 text-capitalize mr-1" style="color: #383838"><i class="bi bi-geo-alt mr-2" style="color: #E62129"></i>{{ $need->city }}</p>
                        </span>
                    </h4>
                    <div class="row">
                        <div class="col-4 pr-0">
                            <p class="mb-1">Nama Pasien</p>
                            <p class="mb-1">Golongan Darah</p>
                            <p class="mb-1">Jumlah Pendonor</p>
                            <p class="mb-1">Jenis Donor</p>
                            <p class="mb-1">Rumah Sakit</p>
                            <p class="mb-1">Kontak</p>
                            <p class="mb-1">Terdaftar</p>
                        </div>
                        <div class="col pl-0">
                            <p class="mb-1" style="color: #212529c0">: {{ $need->name }}</p>
                            <p class="mb-1" style="color: #212529c0">: {{ $need->blood }}</p>
                            <p class="mb-1" style="color: #212529c0">: {{ $need->quantity }} Orang</p>
                            <p class="mb-1" style="color: #212529c0">: {{ $need->type }}</p>
                            <p class="mb-1 text-capitalize" style="color: #212529c0">: {{ $need->hospital }}</p>
                            <p class="mb-1" style="color: #212529c0">: {{ $need->contact }}</p>
                            <p class="mb-1" style="color: #212529c0">: {{ date('l, d F Y', strtotime($need->date)) }}</p>
                        </div>
                    </div>
                    <button class="btn mt-2" style="background-color: #F48687">Hubungi Pasien</button>
                </div>
            </a>
        </div>
        @endforeach

        <div class="container px-0">
            {{ $needs->links() }}
        </div>
    </div>
</div>
    
@endsection