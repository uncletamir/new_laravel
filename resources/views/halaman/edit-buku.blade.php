
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
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Buku</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->


              <form action="{{route('buku.update', $editbuku->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <select class="form-control select2" style="width: 50$;" name="kode_id" id="kode_id">
                      <option disabled value>Pilih Kategori Buku
                        <option value="{{$editbuku->kode_id }}">{{ $editbuku->kategori->judul_kategori }}</option>
                        @foreach ($kategoris as $item)
                        <option value="{{ $item->id }}">{{ $item->judul_kategori }}</option>
                        @endforeach
                      </option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="judul_buku">Judul Buku</label>
                    <input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Judul Buku" value="{{ $editbuku->judul_buku}}">
                  </div>
                  <div class="form-group">
                    <label for="pengarang_buku">Pengaran</label>
                    <input type="text" class="form-control" id="pengarang_buku" name="pengarang_buku" placeholder="Pengarang Buku"  value="{{ $editbuku->pengarang_buku}}">
                  </div>
                  <div class="form-group">
                    <label for="penerbit_buku">Penerbit Buku</label>
                    <input type="text" class="form-control" id="penerbit_buku" name="penerbit_buku" placeholder="Penerbit Buku"  value="{{ $editbuku->penerbit_buku}}">
                  </div>
                  <div class="form-group">
                    <label for="jml_buku">Jumlah Buku</label>
                    <input type="text" class="form-control" id="jml_buku" name="jml_buku" placeholder="Jumlah Buku"  value="{{ $editbuku->jml_buku}}">
                  </div>                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>

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
