<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/lte/dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body style="padding-left: 20px; padding-right:20px">
  
  <table class="tgj"  width='100%'>
    <tr>
      <td width=100><img src="/formlogin/pdam.png" width="70px"></td>
      <td align=center class="judul"><b><font size="5">
        PDAM BANDARMASIH<br /></font></b>
        <b>Jl. A. Yani No.12, Kebun Bunga, Kec. Banjarmasin Tim., Kota Banjarmasin, Kalimantan Selatan 70234<br></b>
      </td>
      <td width=100></td>
    </tr>
  </table>
  
<div class="wrapper">
  <!-- Main content -->
  <section>
    <!-- info row -->
    <br/>
    <div class="row invoice-info">
      <div class="col-sm-12 invoice-col text-center">
            <h3><strong>LAPORAN PEMUSNAHAN</strong></h3>
            
        </address>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-sm table-bordered">
          <thead>
          <tr style="background-color: silver">
            <th>No</th>
            <th>Tanggal</th>
            <th>Nomor</th>
            <th>Perangkat/Infrastruktur</th>
            <th>Petugas</th>
          </tr>
          </thead>
          @php
          $no =1;
          @endphp
          <tbody>
              @foreach ($data as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{\Carbon\Carbon::parse($item->tanggal)->format('d M Y')}}</td>
                    <td>{{$item->nomor}}</td>
                    <td>Nomor Seri : {{$item->infrastruktur == null ? '':$item->infrastruktur->nomor_seri}}<br/>Nama :{{$item->infrastruktur == null ? '':$item->infrastruktur->nama}}</td>
                    <td>{{$item->petugas}}</td>
                </tr>
              @endforeach
          </tbody>
        </table>
        <table width="100%">
          <tr>
            <td width="50%" style="text-align: center"><br/>Mengetahui, <br/> Manager IT
            <br/><br/><br/><br/>
            Muhammad Hadian Noor, S.Kom
            </td>
            <td width="50%" style="text-align: center">Banjarmasin, {{\Carbon\Carbon::now()->translatedFormat('d F Y')}}<br/>
              Dibuat Oleh<br/> Spv. Infrastruktur IT dan PLC Scada
              <br/><br/><br/><br/>
              Khairul Irsyadi, ST
            </td>
          </tr>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>
