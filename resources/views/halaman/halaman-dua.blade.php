
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('template.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Buku</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
          @if(auth()->user()->level=="admin")
          <div class="card-tools">
            <a href="{{route('tambah-buku')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
            </div>
            @endif
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <tr>
                <th>Judul Buku</th>
                <th>Pengaran Buku</th>
                <th>Penerbit Buku</th>
                <th>Jumlah Buku</th>
              </tr>
              @foreach ($books as $item)
              <tr>
                <td>{{ $item->judul_buku }}</td>
                <td>{{ $item->pengarang_buku }}</td>
                <td>{{ $item->penerbit_buku }}</td>
                <td>{{ $item->jml_buku }}</td>
              </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    @include('template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('template.script')
</body>
</html>
