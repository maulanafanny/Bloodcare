@extends('master')

@section('konten')

<script>
    $(document).ready(function () {
        document.body.style.backgroundColor = "#eff1f5";
    });
</script>

<div class="container-fluid mb-5 bg-danger" style="margin-top: -9px">
    <div class="container">
        <h3 class="mb-0 py-5 text-light"><strong>Permohonan Kebutuhan Donor Pasien</strong></h3>
    </div>
</div>

<div id="requestform" class="container-lg"></div>

<script src="{{ mix("js/app.js") }}"></script>

@endsection