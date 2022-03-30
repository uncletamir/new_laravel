
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
            <h1 class="m-0">Data Kategori Buku</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home.index')}}">Home</a></li>
              <li class="breadcrumb-item active">Data Kategori Buku</li>
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
            <a href="{{route('kategori.create')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
            </div>
            @endif
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <tr>
                <th>Kategori</th>
                <th>Kode Kategori</th>
                <th>Opsi</th>
                <!-- <th colspan="2" >Opsi</th> -->
              </tr>
              @foreach ($kategoris as $item)
              <tr>
                <td>{{ $item->judul_kategori }}</td>
                <td>{{ $item->kode_kategori }}</td>
                @if(auth()->user()->level=="admin")
                <td>
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm">
                    <a href="{{route('kategori.edit',$item->id)}}"><i class="fas fa-edit"></i></a>
                  </button>
                  <button type="button" class="btn btn-default btn-sm">
                    <a href="{{route('kategori.destroy',$item->id)}}" onclick="event.preventDefault(); document.getElementById('submit-form').submit();">
                        <i class="far fa-trash-alt"></i>
                    </a>
                  </button>
                  <form id="submit-form" action="{{route('kategori.destroy',$item->id)}}" method="POST" class="hidden">
                      @csrf

                      @method('DELETE')
                  </form>
                </div>
                </td>
                @endif
              </tr>
              @endforeach
            </table>
          </div>
              <div class="card-footer clearfix">
                {{ $kategoris->links() }}                    
              </div>
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
@include('sweetalert::alert')

@include('template.script')
</body>
</html>
