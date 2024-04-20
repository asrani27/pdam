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
                <form class="form-horizontal" method="POST" action="{{route('editinfrastruktur',['id' => $data->id])}}">
                    @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Seri</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="nomor_seri" value="{{$data->nomor_seri}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Nama infrastruktur</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" value="{{$data->nama}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">jenis</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="jenis" value="{{$data->jenis}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">merk</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="merk" value="{{$data->merk}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">satuan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="satuan" value="{{$data->satuan}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">jumlah</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="jumlah" value="{{$data->jumlah}}" onkeypress="return hanyaAngka(event)"/>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">keterangan</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="keterangan" value="{{$data->keterangan}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">departemen</label>
                      <div class="col-sm-10">
                        <select name="departemen_id" class="form-control" required>
                          <option value="">-pilih-</option>
                          @foreach ($departemen as $item)
                              <option value="{{$item->id}}" {{$data->departemen_id == $item->id ? 'selected':''}}>{{$item->nama}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">pengguna</label>
                      <div class="col-sm-10">
                        <select name="pengguna_id" class="form-control" required>
                          <option value="">-pilih-</option>
                          @foreach ($pengguna as $item)
                              <option value="{{$item->id}}" {{$data->pengguna_id == $item->id ? 'selected':''}}>{{$item->nama}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info"><i class="icon fas fa-check"></i>
                        Update</button>
                    <a href="/infrastruktur" class="btn btn-default float-right">Kembali</a>
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
