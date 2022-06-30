@extends('master')

@section('konten')

<script>
    $(document).ready(function () {
      document.body.style.backgroundColor = "#eff1f5";
    });
</script>
    

<div class="container-fluid" style="background-color: red; margin-top: -9px">
    <div class="container">
        <div class="col-lg-10 mx-auto">
            <h3 class="mb-0 py-5"><strong>Kebutuhan Darah</strong></h3>
        </div>
    </div>
</div>

<br><br>

<div class="container">
    <div class="col-lg-10 mx-auto">
        <a href="{{ url()->previous() }}" style="border-radius: 10px" class="btn btn-danger mb-4 p-2 shadow"><i class="bi bi-arrow-left mr-2"></i>Kembali ke Pencarian</a>
        <div class="card shadow-sm mb-5">
            <div class="card-body">
                <h2 class="mb-3">
                    <span class="p-2 badge badge-dark rounded mr-2" style="background-color: #dc3545">
                        <p class="font-weight-bold my-0 text-capitalize">#BLC_URGENT</p>
                    </span>
                    <span class="p-2 badge rounded" style="background-color: #d1d1d1">
                        <p class="font-weight-bold my-0 text-capitalize mr-1" style="color: #383838"><i class="bi bi-geo-alt mr-2" style="color: #E62129"></i>{{ $need->city }}</p>
                    </span>
                </h2>
                <div class="row">
                    <div class="col-4 pr-0">
                        <p class="mb-1" style="font-size: x-large">Nama Pasien</p>
                        <p class="mb-1" style="font-size: x-large">Golongan Darah</p>
                        <p class="mb-1" style="font-size: x-large">Jumlah Pendonor</p>
                        <p class="mb-1" style="font-size: x-large">Jenis Donor</p>
                        <p class="mb-1" style="font-size: x-large">Rumah Sakit</p>
                        <p class="mb-1" style="font-size: x-large">Kontak</p>
                        <p class="mb-1" style="font-size: x-large">Terdaftar</p>
                    </div>
                    <div class="col pl-0">
                        <p class="mb-1" style="font-size: x-large" style="color: #212529">: {{ $need->name }}</p>
                        <p class="mb-1" style="font-size: x-large" style="color: #212529">: {{ $need->blood }}</p>
                        <p class="mb-1" style="font-size: x-large" style="color: #212529">: {{ $need->quantity }} Orang</p>
                        <p class="mb-1" style="font-size: x-large" style="color: #212529">: {{ $need->type }}</p>
                        <p class="mb-1 text-capitalize" style="font-size: x-large; color: #212529;">: {{ $need->hospital }}</p>
                        <p class="mb-1" style="font-size: x-large" style="color: #212529">: {{ $need->contact }}</p>
                        <p class="mb-1" style="font-size: x-large" style="color: #212529">: {{ date('l, d F Y', strtotime($need->date)) }}</p>
                    </div>
                </div>
                <a class="btn btn-lg mt-3" style="background-color: #F48687" href="#">Hubungi Pasien</a>
            </div>
        </div>
    </div>
</div>
    
@endsection