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
            <h1 class="m-0 text-dark">Edit</h1>
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
                <form class="form-horizontal" method="POST" action="{{route('edithasil',['id' => $data->id])}}">
                    @csrf
                  <div class="card-body">
                    
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Infrastruktur Terjadwal</label>
                      <div class="col-sm-10">
                        <select name="jadwal_id" class="form-control" required>
                          <option value="">-pilih-</option>
                          @foreach ($jadwal as $item)
                              <option value="{{$item->id}}" {{$data->jadwal_id == $item->id ? 'selected':''}}>{{$item->infrastruktur->nama}}, {{$item->status}}, Tgl : {{\Carbon\Carbon::parse($item->tanggal)->format('d M Y')}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Hasil Pemeliharaan</label>
                      <div class="col-sm-10">
                        <textarea rows="4" name="hasil_pemeliharaan" class="form-control" >{{$data->hasil_pemeliharaan}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Hasil Penggantian</label>
                      <div class="col-sm-10">
                        <textarea rows="4" name="hasil_penggantian" class="form-control" >{{$data->hasil_penggantian}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
                      <div class="col-sm-10">
                        <textarea rows="4" name="keterangan" class="form-control" >{{$data->keterangan}}</textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Biaya</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="biaya" value="{{$data->biaya}}" onkeypress="return hanyaAngka(event)"/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Teknisi</label>
                      <div class="col-sm-10">
                        <select name="teknisi_id" class="form-control" required>
                          <option value="">-pilih-</option>
                          @foreach ($teknisi as $item)
                              <option value="{{$item->id}}" {{$data->teknisi_id == $item->id ? 'selected':''}}>{{$item->nama}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info"><i class="icon fas fa-check"></i>
                        Update</button>
                    <a href="/hasil" class="btn btn-default float-right">Kembali</a>
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
<script>
  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57))

      return false;
    return true;
  }
</script>
@endpush
