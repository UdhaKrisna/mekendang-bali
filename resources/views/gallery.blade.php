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
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

	<!-- header -->
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
    <div class="m-4">
      <div class="row m-5">
          <div class="col">
          </div>
          <div class="col text-center">
              <h1>Gallery</h1>
              <h6>10 Ragam Jenis Kendang Bali</h6>
          </div>
          <div class="col"></div>
      </div>
      <div class="row">
          <div class="col-sm">
            @foreach ($list as $idx => $k)
                <div class="card shadow">
                    <img class="card-img-top" src="{{ $k['gambar'] }}" alt="">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $k['name'] }}</h5>
                        <div class="row">
                            <div class="col"></div>
                            <div class="col pt-3"><a href="{{ route('detail', $k['id']) }}" class="btn btn-primary">Detail</a></div>
                            <div class="col"></div>
                        </div>
                    </div>
                </div>
            @endforeach
          </div>
          {{-- <div class="col-sm">
              <div class="card-deck">
                  <div class="card shadow">
                      <img class="card-img-top" src="img/kendang.jpg" alt="">
                      <div class="card-body">
                          <h5 class="card-title text-center">Kendang Gupekan</h5>
                          <div class="row">
                              <div class="col"></div>
                              <div class="col pt-3"><a href="" class="btn btn-primary">Detail</a></div>
                              <div class="col"></div>
                          </div>
                      </div>
                  </div>
                  <div class="card shadow my-5">
                      <img class="card-img-top" src="img/kendang.jpg" alt="">
                      <div class="card-body">
                          <h5 class="card-title text-center">Kendang Krumpungan</h5>
                          <div class="row">
                              <div class="col"></div>
                              <div class="col pt-3"><a href="" class="btn btn-primary">Detail</a></div>
                              <div class="col"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm">
              <div class="card-deck">
                  <div class="card shadow">
                      <img class="card-img-top" src="img/kendang.jpg" alt="">
                      <div class="card-body">
                          <h5 class="card-title text-center">Kendang Mebarung</h5>
                          <div class="row">
                              <div class="col"></div>
                              <div class="col pt-3"><a href="" class="btn btn-primary">Detail</a></div>
                              <div class="col"></div>
                          </div>
                      </div>
                  </div>
                  <div class="card shadow my-5">
                      <img class="card-img-top" src="img/kendang.jpg" alt="">
                      <div class="card-body">
                          <h5 class="card-title text-center">Kendang Tambur</h5>
                          <div class="row">
                              <div class="col"></div>
                              <div class="col pt-3"><a href="" class="btn btn-primary">Detail</a></div>
                              <div class="col"></div>
                          </div>
                      </div>
                  </div>
              </div> --}}
          {{-- </div> --}}
      </div>
  </div>
<html>