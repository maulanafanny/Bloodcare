@extends('dashboard.dashboard')

@section('konten')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>

<!-- Chart library -->
<script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
<script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>

<!-- Chart's container -->
<div class="container" id="chart" style="height: 300px;"></div>
<script>
    const chart = new Chartisan({
        el: '#chart',
        url: "@chart('blood_supply')",
        hooks: new ChartisanHooks()
            .title('Jumlah Stok Darah')
            .responsive(true)
            .colors(['#dd0000'])
            .legend({ position: 'bottom' }),
    })
</script>

<h2>Jumlah Stok Darah Hari Ini</h2>
<div class="table-responsive col-lg-5">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Golongan Darah</th>
                <th scope="col">Stok</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $stocks['response'][0]['goldar'] }}</td>
                <td>{{ $stocks['response'][0]['stocks'] }}</td>
            </tr>
            <tr>
                <td>{{ $stocks['response'][1]['goldar'] }}</td>
                <td>{{ $stocks['response'][1]['stocks'] }}</td>
            </tr>
            <tr>
                <td>{{ $stocks['response'][2]['goldar'] }}</td>
                <td>{{ $stocks['response'][2]['stocks'] }}</td>
            </tr>
            <tr>
                <td>{{ $stocks['response'][3]['goldar'] }}</td>
                <td>{{ $stocks['response'][3]['stocks'] }}</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection