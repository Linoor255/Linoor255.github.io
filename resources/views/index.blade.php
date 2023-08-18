@extends('layouts.master')
@section('header')
    <section class="client_section">
        <div class="hero-container container">
            <!-- <div class="col-md-7 my-auto">
                        <p class="label-top text-black" data-aos="fade-up" data-aos-duration="900">SELAMAT DATANG DI WEBSITE PPDB ONLINE </p>
                        <h1 data-aos="fade-up" data-aos-duration="1100">TK Santa Maria Cirebon</h1>
                        <br>
                        <br>
                        <a data-aos="fade-up" data-aos-duration="1500" href="{{ route('daftar.create') }}" class="btn btn-warning px-5 py-2 mb-2 mb-md-0">
                          Daftar sekarang &nbsp; → </a>
                        <a data-aos="fade-up" data-aos-duration="1700" href="#cara-lapor"
                          class="btn btn-outline-warning px-5 py-2">Cara Daftar </a>
                        </div> -->

            <div class="hero_detail-box">
                <h3>
                    Selamat Datang Di<br>
                    Website PPDB Online
                </h3>
                <h1>
                    TK Santa Maria
                </h1>
                <p>
                    <br>

                </p>
                <div class="hero_btn-continer">
                    <a href="{{ route('daftar.create') }}" class="call_to-btn btn_white-border">
                        <span>
                            Daftar Sekarang
                        </span>
                        <!-- <img src="/template/images/right-arrow.png" alt="">  -->
                    </a>
                </div>
            </div>

            <!-- <div class="col-md-5" data-aos="fade-up" data-aos-duration="1700">
                                    <img style="width: 80%" src="{{ asset('Assets/template/images/unnamed1.png ') }}" alt=""
                                        class="img-fluid d-none d-lg-block d-print-block float-md-end" srcset="" />
                        </div>  -->
<style>
img {
  border-radius:5%;
}
</style>

            <div class="hero_img-container">
                <div>
                    {{-- <img src="{{ asset ('Assets/template/images/unnamed.png ') }}" style="width: 80%" class="img-fluid"> --}}
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('Assets/assets/img/slider1.png') }}"
                                    alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('Assets/assets/img/slider2.png') }}"
                                    alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('Assets/assets/img/slider3.png') }}"
                                    alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
@endsection
