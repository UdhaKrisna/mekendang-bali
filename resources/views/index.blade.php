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
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">



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
                    <form method="GET" action="/simple-pencarian" class="input-group d-flex justify-content-end">
                        <div class="form-outline">
                             <input type="search" id="keyword" name="keyword" class="form-control" placeholder="search" style="border: 2px solid rgb(109, 107, 107);"/>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </form>
                </td>
            </tr>
        </table>
    </div>

	<!-- banner -->
	<section class="banner">
		<center> <h2>SELAMAT DATANG DI WEBSITE MEKENDANG BALI </h2> </center>
	</section>

	<!-- about -->
	<section class="about">
		<div class="container">
			<h3>ABOUT</h3>
			<p>Istilah kendang telah disebut-sebut dalam piagam Jawa Kuno yang berangka tahun 821 dan 850 masehi dengan istilah padahi dan muraba. Dalam Prasasti Bebetin, sebuah prasasti Bali yang berasal dari abad ke-9, kendang disebut dengan istilah papadaha. Berbicara mengenai kendang dalam karawitan Bali, Asnawa dalam master tesisnya mengemukakan ada 10 jenis kendang, yaitu kendang angklung, kendang baleganjur, kendang batel, kendang bebarongan, kendang bedug, kendang cedugan, kendang gupekan, kendang krumpungan, kendang mebarung, kendang tambur. Kendang Bali merupakan alat musik yang termasuk dalam keluarga perkusi. Kendang lanang dan kendang wadon memiliki pola yang berbeda-beda, namun jika dimainkan bersama bisa menimbulkan keseimbangan di dalamnya. Keseimbangan merupakan salah satu unsur estetika.</p>
		</div>
	</section>

	<!-- Footer -->
    <footer class="mt-auto py-5" style="background-color: #392b1d;">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; MekendangBaliWebsite, All Rights Reserved</p></div>
        <section id="services" class="services section-bg">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                  <div class="icon-box icon-box-pink">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4 class="title"><a href="">HOME</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                  </div>
                </div>
      
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon-box icon-box-cyan">
                    <div class="icon"><i class="bx bx-file"></i></div>
                    <h4 class="title"><a href="">GALLERY</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
                  </div>
                </div>
      
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon-box icon-box-green">
                    <div class="icon"><i class="bx bx-tachometer"></i></div>
                    <h4 class="title"><a href="">BROWSING</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>
                  </div>
                </div>
      
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon-box icon-box-blue">
                    <div class="icon"><i class="bx bx-world"></i></div>
                    <h4 class="title"><a href="">SEARCHING</a></h4>
                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                  </div>
                </div>
    </footer>
</body>
</html>