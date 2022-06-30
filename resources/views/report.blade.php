@extends('master')

@section('konten')

<br>
<br>

@if ($report->report == NULL)

<div class="container p-5">
    <h3 class="text-center p-5 m-5">Anda belum pernah melakukan tes darah</h3>
</div>

@else

<div class="container">
    <div class="card shadow-sm p-4 col-lg-8 mx-auto">
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
            <a class="btn btn-danger mb-0" href="{{ URL::to('/report/pdf') }}">Export ke PDF</a>
        </div>
    </div>
</div>

@endif


@endsection