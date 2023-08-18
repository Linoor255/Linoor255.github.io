<?php use Carbon\Carbon; ?>

@extends('admin_daftar.template')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Admin</h3>
                            <h6 class="font-weight-normal mb-0">Sistem berjalan dengan baik! <span class="text-primary">
                                    Selamat
                                    mengelola</span></h6>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="justify-content-end d-flex">
                                <div class=" flex-md-grow-1 flex-xl-grow-0">
                                    <button class="btn btn-sm btn-light bg-white -toggle" type="button" id="MenuDate2"
                                        data-toggle="" aria-haspopup="true" aria-expanded="true">
                                        <i class="mdi mdi-calendar"></i>{{ Carbon::now()->timezone('Asia/Jakarta') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card tale-bg">
                        <div class="card-people mt-auto">
                            <img src="{{ asset('AsetAdmin/images/dashboard/people.svg') }} " alt="people">
                            <div class="weather-info">
                                <div class="d-flex">
                                    <div>
                                        <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                                    </div>
                                    <div class="ml-2">
                                        <h4 class="location font-weight-normal">Cirebon</h4>

                                        <h6 class="font-weight-normal">Indonesia</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin transparent">
                    <div class="row">
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-tale">
                                <div class="card-body">
                                    <p class="mb-4">Total Pendaftar</p>
                                    <p class="fs-30 mb-2">
                                        @foreach ($counts as $count)
                                            <tr align="center">
                                                <th>{{ $count->total_daftar }}</th>
                                            </tr>
                                        @endforeach
                                    </p>
                                    <p>Pendaftaran (2023)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-dark-blue">
                                <div class="card-body">
                                    <p class="mb-4">Pendaftar Berhasil</p>
                                    <p class="fs-30 mb-2">
                                        @foreach ($sums as $sum)
                                            <tr align="center">
                                                <th>{{ $sum->total_berhasil }}</th>
                                            </tr>
                                        @endforeach
                                    </p>
                                    <p>Sukses Daftar (2023)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023. TK SANTA MARIA
                <a href="https://www.bootstrapdash.com/" target="_blank">Pengelola penerimaan peserta didik baru</a> from
                ppdb team.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">PPDB TK SANTA MARIA <i
                    class="ti-heart text-danger ml-1"></i></span>
        </div>
    </footer>
    </div>
    </div>
@endsection
