<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <h2 style="font-size: 35px">Hasil Tes Darah</h2>

    <table style="width: 500px;">
        <tr>
            <td style="font-size: 20px">Nama</td>
            <td style="text-indent: 20px; font-size: 20px; padding: 10px">: {{ $report->name }}</td>
        </tr>
        <tr>
            <td style="font-size: 20px">Tanggal Tes</td>
            <td style="text-indent: 20px; font-size: 20px; padding: 10px">: {{ date('l, d F Y', strtotime($report->report->date)) }}</td>
        </tr>
        <tr>
            <td style="font-size: 20px">Tekanan Darah</td>
            <td style="text-indent: 20px; font-size: 20px; padding: 10px">: {{ $report->report->pressure }}</td>
        </tr>
        <tr>
            <td style="font-size: 20px">Hemoglobin</td>
            <td style="text-indent: 20px; font-size: 20px; padding: 10px">: {{ $report->report->hemo }}</td>
        </tr>
        <tr>
            <td style="font-size: 20px">Golongan Darah</td>
            <td style="text-indent: 20px; font-size: 20px; padding: 10px">: {{ $report->report->blood }}</td>
        </tr>
        <tr>
            <td style="font-size: 20px">Rhesus</td>
            <td style="text-indent: 20px; font-size: 20px; padding: 10px; text-transform: capitalize">: {{ $report->report->rhesus }}</td>
        </tr>
    </table>

</body>
</html>
