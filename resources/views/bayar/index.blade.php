@extends('admin_daftar.template')
@section('content')
<div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Data Pembayaran</h2>
                  <p class="card-description">
                    <a class="btn btn-dark btn-icon-text" href="{{route('bayar.create')}}">
                    Tambah Data
                                                  
                    </a>
                  </p>
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
                            <th>Nominal</th>
                            <th>Status</th>
                            <th width="280px">Action</th>
                          </tr>
                    </thead>
                    <tbody>
                        @foreach ($bayars as $bayar)
                        <tr>
                           <td>{{ ++$i}}</td>
                           <td>{{$bayar->kd_bayar}}</td>
                           <td>{{$bayar->nm}}</td>
                           <td>{{$bayar->nominal}}</td>
                           <td>
                                @if ($bayar->status == 1) 
                                <a class="btn btn-danger" href="{{ url('status/'.$bayar->id_bayar) }}">
                                    Belum Lunas
                                </a>
                                @else 
                                <a class="btn btn-success" href="{{ url('status/'.$bayar->id_bayar) }}">
                                    Lunas
                                </a>
                                @endif
                            
                           </td>
                           <td>
                            <form action="{{ route('bayar.destroy', $bayar->id_bayar) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <a href="{{ route('bayar.edit', $bayar->id_bayar) }}" class="btn btn-warning">Ubah</a>
                                <button type="submit" class="btn btn-danger" onclick="javascript: return confirm('Yakin ingin menghapus data ini ?')">
                                 Hapus </button>
                            </form>
                           </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


@endsection