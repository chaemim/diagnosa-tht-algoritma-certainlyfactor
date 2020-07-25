<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <style type="text/css">
        .tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
        .tg td{font-family:Arial;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
        .tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
        .tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
        .tg .tg-ti5e{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
        .tg .tg-rv4w{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;}
    </style>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div style="font-family:Arial; font-size:12px;">
                        <center><h3>Laporan Konsultasi</h3></center>
                    </div>
                    
                    <div class="">
                            <table class="tg">
                                <thead>
                                    <tr>
                                        <th class="tg-3wr7">Identitas</th>
                                        <th class="tg-3wr7">Gejala</th>
                                        <th class="tg-3wr7">Kerusakan</th>
                                        <th class="tg-3wr7">Solusi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td class="tg-rv4w" width="30%">
                                                {{ $riwayat->nama }} <br>
                                                {{ $riwayat->updated_at->format('d F Y') }}
                                            </td>
                                            <td class="tg-rv4w" width="50%">
                                                {!! $riwayat->gejala !!}
                                            </td>
                                            <td class="tg-rv4w" width="30%">
                                                {{ $riwayat->kerusakan }} <br>
                                                {{ $riwayat->kepastian }} <br>
                                                {{ $riwayat->nilai }}                                               
                                            </td>
                                            <td class="tg-rv4w" width="40%">
                                                {!! $riwayat->solusi !!}
                                            </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
