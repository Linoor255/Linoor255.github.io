<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>PPDB Online TK SANTA MARIA</title>



    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Assets/template/css/bootstrap.css') }}" />
    <!-- progress barstle -->
    <link rel="stylesheet" href="{{ asset('Assets/template/css/css-circular-prog-bar.css') }} ">
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font wesome stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="{{ asset('Assets/template/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('Assets/template/css/responsive.css') }}" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('Assets/template/fontawesome-free/css/all.min.css') }}">


    <link rel="stylesheet" href="{{ asset('Assets/template/css/css-circular-prog-bar.css') }}">


</head>

<body>
    <div class="top_container">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('Assets/template/images/logo5.png') }}" alt="">
                        <!-- <span>
              TK SANTA MARIA
            </span> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link" href="/"> Home</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('daftar_alur') }}"> Alur Pendaftaran </a>
                                </li>

                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('daftar_infokegiatan') }}"> Info </a>
                                </li>


                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('daftar.create') }}"> Daftar </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('daftar_index') }}"> Pengumuman </a>
                                </li>

                </nav>
            </div>
        </header>
        @yield('header')
    </div>
    <!-- end header section -->

    @yield('content')


    <!-- <footer class="bg-black p-4 mt-100">
    <div class="container">
        <div class="row">
            <div class="col-md-1 d-none d-md-block">
                <img src="{{ asset('Assets/template/images/logo5.png') }}" style="width: 75%" class="img-fluid" />
            </div>
            <div class="col-md-5">
                <p class="footer-header">TK SANTA MARIA CIREBON</p>
                <hr />
                <p class="footer-core-info">
                    <b>Layanan Contact TK SANTA MARIA CIREBON</b> <br />
                    Call Center : (022) 8827728 <br />

                    Jam operasional Contact Center : <br />
                    Hari Senin — Minggu, Pukul 08.00 - 20.00 WIB
                </p>
                <hr />
                <p>
                    <a href="https://www.instagram.com/smkn1ciamis/" class="text-decoration-none text-black"> <i
                            class="lni lni-instagram"></i></a>
                    &nbsp;
                    <a href="https://www.facebook.com/smkn1ciamis/" class="text-decoration-none text-black"><i
                            class="lni lni-facebook-original"></i></a>
                    &nbsp;
                    <a href="https://twitter.com/smkn1ciamis" class="text-decoration-none text-black"><i
                            class="lni lni-twitter-original"></i></a>
                </p>
            </div>
            <div class="col-md-4 ms-auto d-none d-md-block">
                <ul class="footer-link" style="list-style: none">
                    <a>
                        <li>Beranda</li>
                    </a>
                    <a>
                        <li class="mt-3">Tentang Kami</li>
                    </a>
                    </a>
                    <a >
                        <li class="mt-3">FAQ</li>
                    </a>
                    <a >
                        <li class="mt-3">Hubungi Kami</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</footer> -->

    <!-- footer section -->
    <!-- <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2022 PPDB TK Santa Maria Cirebon |
      <a href="https://www.youtube.com/channel/UCHO5t3O1satYKfGnlxGDVsg/playlists?view_as=subscriber">Developed By : Kelompok 1</a>
    </p>
  </section> -->
    <!-- footer section -->

    <script type="text/javascript" src="{{ asset('Assets/template/js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Assets/template/js/bootstrap.js') }} "></script>

    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = '/template/images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
    </script>
    <!-- end google map js -->
</body>

</html>
