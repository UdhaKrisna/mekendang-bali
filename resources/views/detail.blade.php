<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            background-image: url('https://i.postimg.cc/nzxTggHZ/Background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Kendang | Detail</title>
</head>

<body class="d-flex flex-column bg-light min-vh-100">
    <!-- Navbar -->
    <div class="p-3 ps-5" style="background-color: #392b1d;">
        <a href=""><i class="bi bi-facebook mx-3 text-white"></i></a>
        <a href=""><i class="bi bi-instagram mx-3 text-white"></i></a>
        <a href=""><i class="bi bi-youtube mx-3 text-white"></i></a>
    </div>
    <div class="bg-white py-0 shadow">
        <table class="d-flex justify-content-center">
            <tr>
                <td style="width: 720px;">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container">
                            <img src="https://i.postimg.cc/sx7gpD2z/Logo.png" alt="Image" style="width:150px" align="left"> 
                            <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                                <ul class="navbar-nav mb-5  mb-lg-0">
                                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/penjelajahan">Browsing</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/pencarian">Searching</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </td>
                <td style="width: 720px;">
                    <div class="input-group d-flex justify-content-end">
                        <div class="form-outline">
                             <input type="search" id="form1" class="form-control" placeholder="search" style="border: 2px solid rgb(109, 107, 107);"/>
                            </div>
                            <button type="button" class="btn btn-primary">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                </td>
            </tr>
        </table>
    </div>

    <!-- Main -->
    <div class="container my-4">
        <div class="row">
            <div class="col m-auto">
                {{-- TODO: Ganti link kendang ini!!! --}}
                <img src="{{ isset($kendang['image']) ? asset($kendang['image']) : asset('img/kendang.jpg') }}"
                    alt="">
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1>{{ $kendang['name'] }}</h1>
                        <p class="text-justify" style="text-align: justify">{{ $kendang['description'] }}</p>
                        <div class="row">
                            <div class="col py-3">
                                <p class="fw-bold">Bahan :
                                    {{ isset($kendang['bahan']) ? joinArrayToString($kendang['bahan'], 'name') : '-' }}</p>
                            </div>
                            <div class="col py-3">
                                <p class="fw-bold">Fungsi :
                                    {{ isset($kendang['fungsi']) ? joinArrayToString($kendang['fungsi'], 'name') : '-' }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="fw-bold">Jenis :
                                    {{ isset($kendang['jenis']) ? joinArrayToString($kendang['jenis'], 'name') : '-' }}</p>
                            </div>
                            <div class="col">
                                <p class="fw-bold">Ukuran :
                                    {{ isset($kendang['ukuran']) ? joinArrayToString($kendang['ukuran'], 'name') : '-' }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col py-3">
                                <p class="fw-bold">Teknik Permainan :
                                    {{ isset($kendang['teknik']) ? joinArrayToString($kendang['teknik'], 'name') : '-' }}</p>
                            </div>
                            <div class="col py-3">
                                <p class="fw-bold">Daerah :
                                    {{ isset($kendang['daerah']) ? joinArrayToString($kendang['daerah'], 'name') : '-' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
