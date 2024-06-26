@extends('layouts.master')

@push('css')
<link rel="stylesheet" href="/lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
@endpush

@section('content')
<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Laporan</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-outline card-primary">
              {{-- <div class="card-header">
              </div> --}}
              <!-- /.card-header -->
              <div class="card-body">
                <a href="/laporan/departemen" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-file"></i> Lap. Departemen</a>
                <a href="/laporan/teknisi" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-file"></i> Lap. Teknisi</a>
                <a href="/laporan/pengguna" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-file"></i> Lap. Pengguna</a>
                <a href="/laporan/rekanan" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-file"></i> Lap. Rekanan</a>
                <a href="/laporan/infrastruktur" class="btn btn-sm btn-primary" target="_blank"><i class="fa fa-file"></i> Lap. Infrastruktur</a>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>

        {{-- <div class="row">
          <div class="col-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="get" action="/laporan/periode" target="_blank">
                  @csrf
                  Mulai
                  <input type="date" name="mulai" class="form-control">
                  Sampai
                  <input type="date" name="sampai" class="form-control">
                  Jenis Laporan
                  <select name="jenis" class="form-control" required>
                    <option value="">-pilih-</option>
                    <option value="1">Jadwal Pemeliharaan</option>
                    <option value="2">Hasil Pemeliharan</option>
                    <option value="3">serah terima</option>
                    <option value="4">pemusnahan</option>
                  </select>
                  <br/>
                  <button type="submit" class="btn btn-primary btn-block">Print</button>
                  
                </form>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div> --}}


        <div class="row">
          <div class="col-12">
            <div class="card card-outline card-primary">
              {{-- <div class="card-header">
              </div> --}}
              <!-- /.card-header -->
              <div class="card-body">
                <form method="get" action="/laporan/periode" target="_blank">
                  @csrf
                  Bulan
                  <select name="bulan" class="form-control" required>
                    <option value="">-pilih-</option>
                    <option value="1" {{old('bulan') == '1' ? 'selected':''}}>Januari</option>
                    <option value="2" {{old('bulan') == '2' ? 'selected':''}}>Februari</option>
                    <option value="3" {{old('bulan') == '3' ? 'selected':''}}>Maret</option>
                    <option value="4" {{old('bulan') == '4' ? 'selected':''}}>April</option>
                    <option value="5" {{old('bulan') == '5' ? 'selected':''}}>Mei</option>
                    <option value="6" {{old('bulan') == '6' ? 'selected':''}}>Juni</option>
                    <option value="7" {{old('bulan') == '7' ? 'selected':''}}>Juli</option>
                    <option value="8" {{old('bulan') == '8' ? 'selected':''}}>Agustus</option>
                    <option value="9" {{old('bulan') == '9' ? 'selected':''}}>September</option>
                    <option value="10" {{old('bulan') == '10' ? 'selected':''}}>Oktober</option>
                    <option value="11" {{old('bulan') == '11' ? 'selected':''}}>November</option>
                    <option value="12" {{old('bulan') == '12' ? 'selected':''}}>Desember</option>
                  </select>
                  Tahun
                  <input type="text" name="tahun" class="form-control">
                  Jenis Laporan
                  <select name="jenis" class="form-control" required>
                    <option value="">-pilih-</option>
                    <option value="1">Jadwal Pemeliharaan</option>
                    <option value="2">Hasil Pemeliharan</option>
                    <option value="3">serah terima</option>
                    <option value="4">pemusnahan</option>
                  </select>
                  <br/>
                  <button type="submit" class="btn btn-primary btn-block">Print</button>
                  
                </form>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </section>
    
</div>
@endsection

@push('js')

@endpush
