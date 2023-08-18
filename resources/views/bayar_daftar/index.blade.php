@extends('admin_daftar.template')
@section('content')
<div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Data Pembayaran</h2>

                <form action="/cari" method ="GET">
                    @csrf
                <div class="form-row">
                    <div class ="col-md-3"><div class="form-group">
                        <input type="date" name="dari" class="form-control">
                    </div></div>
                    <div class ="col-md-3"><div class="form-group">
                        <input type="date" name="sampai" class="form-control">
                    </div></div>

                    <div class ="col-md-3"><div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Cari Data">
                    </div></div>

                    <div class ="col-md-3"><div class="form-group">
                        <a class="btn btn-success" href="{{route('bayar.create')}}"><i class="fas fa-plus"></i>  Tambah Data</a>

                    </div></div>
                </div>
                </form>

                  <!-- <p class="card-description">
                    <a class="btn btn-dark btn-icon-text" href="{{route('bayar.create')}}">
                    Tambah Data

                    </a>
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
                            <th>Kode Bayar</th>
                            <th>Nama</th>
                            <th>Tanggal Bayar</th>
                            <th>Nominal</th>
                            <th>Status</th>
                            <th width="280px">Action</th>
                          </tr>
                    </thead>
                    <tbody>
                        @foreach ($bayars as $i=> $bayar)
                        <tr>
                           <td>{{ $i +=1}}</td>
                           <td>{{$bayar->kd_bayar}}</td>
                           <td>{{$bayar->nm}}</td>
                           <td>{{$bayar->tgl_bayar}}</td>
                           <td>Rp. {{ number_format($bayar->nominal) }}</td>
                           <td>
                                @if ($bayar->status == 0)
                                <a class="btn btn-danger" href="{{ url('statusBayar/'.$bayar->id_bayar) }}">
                                    Belum Lunas
                                </a>
                                @else
                                <a class="btn btn-success" href="{{ url('statusBayar/'.$bayar->id_bayar) }}">
                                    Lunas
                                </a>
                                @endif

                           </td>
                           <td>
                            <form action="{{ route('bayar.destroy', $bayar->id_bayar) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                {{-- <a href="{{ route('bayar.edit', $bayar->id_bayar) }}" class="btn btn-warning"><i class="fas fa-pen"></i></a> --}}
                                <button type="submit" class="btn btn-danger" onclick="javascript:
                                  return confirm('Yakin ingin menghapus data ini ?')">
                                 <i class="fas fa-trash"></i>
                                </button>
                            </form>
                           </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <br>
                  <div class ="col-md-3"><div class="form-group">
                        <a href="/reportBayar" target="_blank" class="btn btn-primary"><i class="fas fa-print"></i>  Cetak Data </a>
                    </div></div>
                </div>
              </div>
            </div>
          </div>
        </div>


@endsection
