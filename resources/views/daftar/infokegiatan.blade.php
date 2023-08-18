@extends('layouts.master_content')
@section('judul')
    <section class="client_section layout_padding">
        <div class="container">
            <h1 class="text-center text-warning">
                <b>Informasi Kegiatan TK SANTA MARIA</b>
            </h1>
        </div>
    </section>
@endsection

@section('content')
    <section class="bg-transparent" style="padding: 10px 10px 10px 10px ">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('sukses'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('sukses') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <br>
        <section class="content card" style="padding: 20px 20px 20px 20px  ">
            <div class="box">
                <div class="section-top-border">

                    <div class="card-group">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('Assets/assets/img/info1.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">PPDB 2023</h5>
                                <p class="card-text">Let's be part of us.. be confident, independent and communicative..</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Diupload 2 hari yang lalu</small>
                            </div>
                        </div>

                        <div class="card">
                            <img class="card-img-top" src="{{ asset('Assets/assets/img/info3.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">PPDB 2023</h5>
                                <p class="card-text">Dear parents milllenial,
                                    Selamat Natal 2022 dan Tahun Baru 2023.
                                    Ajak putra/i kuy untuk ikutan seru - seruan bersama di TRIAL Class DI TK SANTA MARIA
                                    CIREBON. <br>

                                    Free pendaftaran lhooo…<br>
                                    Silakan daftarkan putra/i anda di link dibawah ini<br>

                                    https://forms.gle/YJSAV26z6RXbrab2A <br>

                                    Info lebih lanjut silakan hubungi:<br>

                                    📌 Contact us:<br>
                                    📲 WA +6287829303944<br>
                                    📍 Admission office:<br>
                                    Jl. Sisingamangaraja no.22 Cirebon<br>

                                    Check out our:<br>
                                    Fb: Tksantamaria<br>
                                    Youtube: TK SANTA MARIA CIREBON<br>

                                    See you soon</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Diupload 3 hari yang lalu</small>
                            </div>
                        </div>

                        <div class="card">
                            <img class="card-img-top" src="{{ asset('Assets/assets/img/info2.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Pengenalan Lingkungan Sekolah</h5>
                                <p class="card-text">Pengenalan Lingkungan Sekolah hari pertama yang
                                    dilaksanakan pada 2021.
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Diupload 3 bulan yang lalu</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>



    </section>
@endsection
