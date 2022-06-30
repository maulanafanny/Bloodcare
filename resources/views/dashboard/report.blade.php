@extends('dashboard.dashboard')

@section('konten')
    
<br>
<br>

<div class="container">
    <div class="col-lg-8 mx-auto">
        <a href="{{ url()->previous() }}" style="border-radius: 10px" class="btn btn-dark mb-4 p-2 shadow"><i class="bi bi-arrow-left mr-2"></i>Kembali</a>
        <div class="card shadow-sm p-4 mx-auto">
            <div class="card-body">
                <h2 class="font-weight-bold">Hasil Tes Darah</h2>
                <br>
                <div class="row">
                    <div class="col-sm-4">
                        <p>Nama</p>
                        <p>Tanggal Tes</p>
                        <p>Tekanan Darah</p>
                        <p>Hemoglobin</p>
                        <p>Golongan Darah</p>
                        <p class="mb-4">Rhesus</p>
                    </div>
                <div class="col-sm-8">
                    <p>: {{ $report->name }}</p>
                    <p>: {{ date('l, d F Y', strtotime($report->report->date)) }}</p>
                    <p>: {{ $report->report->pressure }}</p>
                    <p>: {{ $report->report->hemo }}</p>
                    <p>: {{ $report->report->blood }}</p>
                    <p class="text-capitalize">: {{ $report->report->rhesus }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<br>

@endsection