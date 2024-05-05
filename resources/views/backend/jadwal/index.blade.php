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
            <h1 class="m-0 text-dark">Data Jadwal Pemeliharaan</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <a href="/jadwal/add" class="btn btn-sm btn-primary">Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <form class="form-horizontal" method="get" action="/jadwal/search">
                  @csrf
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Periode Jadwal</label>
                    <div class="col-sm-2">
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
                    </div>
                    <div class="col-sm-2">
                      <input type="text" name="tahun" class="form-control" value="{{old('tahun')}}">
                    </div>
                    <div class="col-sm-2">
                      <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                  </div>
                </form>
                <hr>
                <table id="example1" class="table table-bordered table-striped table-sm">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Periode Jadwal</th>
                    <th>Nama Perangkat</th>
                    <th>Status</th>
                    <th>Tanggal Jadwal</th>
                    <th>Nomor Alat</th>
                    <th>Departemen</th>
                    <th>Lokasi</th>
                    <th>Pengguna</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  @php
                  $no =1;
                  @endphp
                  <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{nama_bulan($item->bulan)}} {{$item->tahun}}</td>
                            <td>{{$item->infrastruktur == null ? '':$item->infrastruktur->nama}}</td>
                            <td>{{$item->status}}</td>
                            <td>{{\Carbon\Carbon::parse($item->tanggal)->format('d M Y')}}</td>
                            <td>{{$item->infrastruktur == null ? '':$item->infrastruktur->nomor_alat}}</td>
                            <td>{{$item->infrastruktur == null ? '':$item->infrastruktur->departemen->nama}}</td>
                            <td>{{$item->infrastruktur == null ? '':$item->infrastruktur->lokasi}}</td>
                            <td>{{$item->infrastruktur == null ? '':$item->infrastruktur->pengguna->nama}}</td>
                            <td>
                                <a href="/jadwal/edit/{{$item->id}}" class="btn btn-xs bg-gradient-warning"><i class="fas fa-edit"></i></a>
                                <a href="/jadwal/delete/{{$item->id}}" class="btn btn-xs bg-gradient-danger" onclick="return confirm('Yakin Menghapus Data Ini?');"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                  
                </table>
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

<script src="/lte/plugins/datatables/jquery.dataTables.js"></script>
<script src="/lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
@endpush
