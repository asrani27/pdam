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
                            <td>{{\Carbon\Carbon::parse($item->tanggal)->format('M Y')}}</td>
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
