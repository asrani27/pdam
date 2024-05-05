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
                <form class="form-horizontal" method="POST" action="{{route('editjadwal',['id' => $data->id])}}">
                    @csrf
                  <div class="card-body">

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Periode Jadwal</label>
                      <div class="col-sm-2">
                        <select name="bulan" class="form-control" required>
                          <option value="">-pilih-</option>
                          <option value="1" {{$data->bulan == '1' ? 'selected':''}}>Januari</option>
                          <option value="2" {{$data->bulan == '2' ? 'selected':''}}>Februari</option>
                          <option value="3" {{$data->bulan == '3' ? 'selected':''}}>Maret</option>
                          <option value="4" {{$data->bulan == '4' ? 'selected':''}}>April</option>
                          <option value="5" {{$data->bulan == '5' ? 'selected':''}}>Mei</option>
                          <option value="6" {{$data->bulan == '6' ? 'selected':''}}>Juni</option>
                          <option value="7" {{$data->bulan == '7' ? 'selected':''}}>Juli</option>
                          <option value="8" {{$data->bulan == '8' ? 'selected':''}}>Agustus</option>
                          <option value="9" {{$data->bulan == '9' ? 'selected':''}}>September</option>
                          <option value="10" {{$data->bulan == '10' ? 'selected':''}}>Oktober</option>
                          <option value="11" {{$data->bulan == '11' ? 'selected':''}}>November</option>
                          <option value="12" {{$data->bulan == '12' ? 'selected':''}}>Desember</option>
                        </select>
                      </div>
                      <div class="col-sm-2">
                        <select name="tahun" class="form-control" required>
                          <option value="">-pilih-</option>
                          <option value="2024" {{$data->tahun == '2024' ? 'selected':''}}>2024</option>
                          <option value="2025" {{$data->tahun == '2025' ? 'selected':''}}>2025</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">tanggal jadwal pemeliharaan</label>
                      <div class="col-sm-10">
                        <input type="date" class="form-control" name="tanggal" value="{{$data->tanggal}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Perangkat</label>
                      <div class="col-sm-10">
                        <select name="infrastruktur_id" class="form-control" required>
                          <option value="">-pilih-</option>
                          @foreach ($infrastruktur as $item)
                              <option value="{{$item->id}}" {{$data->infrastruktur_id == $item->id ? 'selected':''}}>nomor seri : {{$item->nama}}, nama :{{$item->nama}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Status</label>
                      <div class="col-sm-10">
                        <select name="status" class="form-control" required>
                          <option value="terjadwal" {{$data->status == 'terjadwal' ? 'selected':''}}>Terjadwal</option>
                          <option value="onprogres" {{$data->status == 'onprogres' ? 'selected':''}}>On Progress</option>
                          <option value="selesai" {{$data->status == 'selesai' ? 'selected':''}}>Selesai</option>
                        </select>
                      </div>
                    </div>
                    
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info"><i class="icon fas fa-check"></i>
                        Update</button>
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
