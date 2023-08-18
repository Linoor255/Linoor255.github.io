<?php use Carbon\Carbon; ?>
@extends('layouts.master_content')
@section('judul')
    <section class="client_section layout_padding">
        <div class="container">
            <h1 class="text-center text-warning">
                <b>Data Peserta Didik Pendaftar</b>
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

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Status</th>
                    <th>Kode Daftar</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Usia</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($daftars as $i => $daftar)
                    <tr>
                        <td>{{ $i += 1 }}</td>
                        <td>
                            @if ($daftar->status == 0)
                                <a class="btn btn-danger" href="">
                                    Pending
                                </a>
                            @else
                                <a class="btn btn-success" href="">
                                    Diterima
                                </a>
                            @endif

                        </td>
                        <td>{{ $daftar->kd_daftar }}</td>
                        <td>{{ $daftar->nm }}</td>
                        <td>{{ $daftar->gender }}</td>
                        <td>{{ Carbon::parse($daftar->tgl_lahir)->age }} Tahun</td>
                        <!-- <td><label class="btn btn-success">{{ $daftar->status == 1 ? 'Diterima' : 'Pending' }}</label></td> -->

                    </tr>
                @endforeach
            </tbody>
        </table>

    </section>
@endsection
