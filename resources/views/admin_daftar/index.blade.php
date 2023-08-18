<?php use Carbon\Carbon; ?>
@extends('admin_daftar.template')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Data Pendaftar</h2>
                        <!-- <p class="card-description">
                                        <a class="btn btn-dark btn-icon-text" href="{{ url('formAdmin') }}">
                                        Tambah Data </a>
                                      </p> -->
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Status</th>
                                        <th>Kode Daftar</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Usia</th>
                                        <th>Alamat</th>
                                        <th>Agama</th>
                                        <th width="14px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($daftars as $i => $daftar)
                                        <tr>
                                            <td>{{ $i += 1 }}</td>
                                            <td>
                                                @if ($daftar->status == 0)
                                                    <a class="btn btn-danger"
                                                        href="{{ url('status/' . $daftar->id_daftar) }}">
                                                        Pending
                                                    </a>
                                                @else
                                                    <a class="btn btn-success"
                                                        href="{{ url('status/' . $daftar->id_daftar) }}">
                                                        Diterima
                                                    </a>
                                                @endif

                                            </td>
                                            <td>{{ $daftar->kd_daftar }}</td>
                                            <td>{{ $daftar->nm }}</td>
                                            <td>{{ $daftar->gender }}</td>
                                            <td>{{ Carbon::parse($daftar->tgl_lahir)->age }} Tahun</td>
                                            <td>{{ $daftar->alamat }}</td>
                                            <td>{{ $daftar->agama }}</td>
                                            <td>
                                                <form action="{{ route('daftar.destroy', $daftar->id_daftar) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('daftar.edit', $daftar->id_daftar) }}"
                                                        class="btn btn-warning"><i class="fas fa-pen"></i></a>
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="javascript: return confirm('Yakin ingin menghapus data ini ?')">
                                                        <i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br>
                            <br>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <a href="/reportDaftar" target="_blank" class="btn btn-primary"><i
                                            class="fas fa-print"></i> Cetak Data </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
