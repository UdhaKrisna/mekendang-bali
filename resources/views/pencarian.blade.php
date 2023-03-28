<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-image: url('https://i.postimg.cc/nzxTggHZ/Background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mekendang Bali Website</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
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
    <!-- Input -->
    <div class="container card p-3 mt-5 shadow">
        <div class="card-body">
            <div class="text-center">
                <h1 class="fw-bold" style="color: #805424;">Pencarian</h1>
                <h6>Masukan Kriteria Kendang yang ingin Dicari</h6>
            </div>
            <form action="{{ route('cari') }}" method="GET">
                <div class="row mt-5">
                    <div class="col">
                        <div class="pb-3">
                            <label for="bahan" class="fw-bold pb-2">Kriteria 1 Bahan</label>
                            <div class="input-group">
                                <select class="form-control" id="bahan" name="bahan">
                                    <option selected value="">Pilih salah satu</option>
                                    @foreach ($kriteria['bahan'] as $bahan)
                                        <option {{ $bahan['id'] == request()->get('bahan') ? 'selected' : '' }} value="{{ $bahan['id'] }}">{{ $bahan['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="pb-3">
                            <label for="fungsi" class="fw-bold pb-2">Kriteria 2 Fungsi</label>
                            <div class="input-group">
                                <select class="form-control" id="fungsi" name="fungsi">
                                    <option selected value="">Pilih salah satu</option>
                                    @foreach ($kriteria['fungsi'] as $fungsi)
                                        <option {{ $fungsi['id'] == request()->get('fungsi') ? 'selected' : '' }} value="{{ $fungsi['id'] }}">{{ $fungsi['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="pb-3">
                            <label for="jenisPemain" class="fw-bold pb-2">Kriteria 3 Jenis Pemain</label>
                            <div class="input-group">
                                <select class="form-control" id="jenisPemain" name="jenisPemain">
                                    <option selected value="">Pilih salah satu</option>
                                    @foreach ($kriteria['jenisPemain'] as $jenisPemain)
                                        <option {{ $jenisPemain['id'] == request()->get('jenisPemain') ? 'selected' : '' }} value="{{ $jenisPemain['id'] }}">{{ $jenisPemain['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="pb-3">
                            <label for="ukuran" class="fw-bold pb-2">Kriteria 4 Ukuran</label>
                            <div class="input-group">
                                <select class="form-control" id="ukuran" name="ukuran">
                                    <option selected value="">Pilih salah satu</option>
                                    @foreach ($kriteria['ukuran'] as $ukuran)
                                        <option {{ $ukuran['id'] == request()->get('ukuran') ? 'selected' : '' }} value="{{ $ukuran['id'] }}">{{ $ukuran['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="pb-3">
                            <label for="teknik" class="fw-bold pb-2">Kriteria 5 Teknik Permainan</label>
                            <div class="input-group">
                                <select class="form-control" id="teknik" name="teknik">
                                    <option selected value="">Pilih salah satu</option>
                                    @foreach ($kriteria['teknik'] as $teknik)
                                        <option {{ $teknik['id'] == request()->get('teknik') ? 'selected' : '' }} value="{{ $teknik['id'] }}">{{ $teknik['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                    </div>
                    <div class="mt-5">
                        <div class="row">
                            <div class="col"></div>
                            <div class="col"></div>
                            <div class="col"></div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Cari</button>
                                <a class="btn btn-danger" href="{{ route('cari') }}">Reset</a>
                            </div>
                            <div class="col"></div>
                            <div class="col"></div>
                            <div class="col"></div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    </div>

    <!-- Output -->
    <div class="container card mt-4 mb-5 shadow">
        <div class="card-body">
            <h1 style="color: #805424;">Hasil Pencarian</h1>
        </div>
        <ol class="fw-bold">
            @forelse ($list_kendang as $kendang)
                <li><a href="{{ route('detail', $kendang['id']) }}">{{ $kendang['name'] }}</a></li>
            @empty
                <p>{{ empty(request()->all()) ? 'Hasil pencarian Kendang masih kosong.' : 'Hasil pencarian Kendang tidak ditemukan.' }}</p>
            @endforelse
        </ol>
    </div>
</html>
