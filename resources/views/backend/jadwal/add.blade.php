@extends('layouts.master')

@push('css')
<link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endpush

@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-outline card-primary">
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{route('jadwal')}}">
                    @csrf
                    
                  <div class="card-body">

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Periode Jadwal</label>
                      <div class="col-sm-2">
                        <select name="bulan" class="form-control" required>
                          <option value="">-pilih-</option>
                          <option value="1">Januari</option>
                          <option value="2">Februari</option>
                          <option value="3">Maret</option>
                          <option value="4">April</option>
                          <option value="5">Mei</option>
                          <option value="6">Juni</option>
                          <option value="7">Juli</option>
                          <option value="8">Agustus</option>
                          <option value="9">September</option>
                          <option value="10">Oktober</option>
                          <option value="11">November</option>
                          <option value="12">Desember</option>
                        </select>
                      </div>
                      <div class="col-sm-2">
                        <select name="tahun" class="form-control" required>
                          <option value="">-pilih-</option>
                          <option value="2024">2024</option>
                          <option value="2025">2025</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Pemeliharaan</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" name="tanggal">
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Perangkat</label>
                      <div class="col-sm-10">
                        <select name="infrastruktur_id" class="form-control" required>
                          <option value="">-pilih-</option>
                          @foreach ($infrastruktur as $item)
                              <option value="{{$item->id}}">Nomor Seri : {{$item->nomor_seri}}, nama :{{$item->nama}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                      <div class="col-sm-10">
                        <select name="status" class="form-control" required>
                          <option value="terjadwal">Terjadwal</option>
                          <option value="onprogres">On Progress</option>
                          <option value="selesai">Selesai</option>
                        </select>
                      </div>
                    </div>
                    
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info"><i class="icon fas fa-check"></i>
                        Simpan</button>
                    <a href="/jadwal" class="btn btn-default float-right">Kembali</a>
                  </div>
                  <!-- /.card-footer -->
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>
    
</div>
@endsection

@push('js')
@endpush
