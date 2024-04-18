<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UKK LARAVEL ZAKI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style type="text/css">
    .background{
        background-image: url('/images/Iphone wallpaper.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }
    </style>
</head>
<body class="background">
    <h3 class="text-white">Uji Kopetensi Keahlian</h3>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-rounded">
                    <div class="card-header">Ujian Kopetensi keahlian</div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>NISN</td>
                                        <td>:</td>
                                        <td>----------</td>
                                    </tr>
                                    <tr>
                                        <td>NAMA</td>
                                        <td>:</td>
                                        <td>Misbahudin Zaki</td>
                                    </tr>
                                    <tr>
                                        <td>Kelas</td>
                                        <td>:</td>
                                        <td>XII PPLG 1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <h1 class="text-white">PENGEMBANGAN PERANGKAT LUNAK DAN GAME</h1>
                <div class="col-md-12">
                    <div class="card border-0 shadow-rounded">
                        <div class="card-header">Project</div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>KALKULATOR V.1</th>
                                            <th>KALKULATOR V.2</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="{{route('kalkulator')}}" class="btn btn-md btn-primary">Kalkulator</a></td>
                                            <td><a href="{{route('kalkulatorjs')}}" class="btn btn-md btn-primary">Kalkulator</a></td>
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


