<!DOCTYPE html>
<html>
<head>
@include('template.head')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('template.navbar')

        @include('template.sidebar')

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                                <h1 class="m-0">Pengajuan Peminjaman Buku</h1>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="">Home</a></li>
                                    <li class="breadcrumb-item active"><a href="">Pengajuan Peminjaman Buku</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
            <div class="card card-info card-outline">
                <div class="card-header">
                    
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <tr>
                            <th>Buku</th>
                            <th>Opsi</th>
                        </tr>
                        @foreach($books as $book)
                        <tr>
                            <td>
                                <dt>{{ $book ->judul_buku }}</dt>
                                <dd>Pengarang: {{ $book ->pengarang_buku }}</dd>
                                <dd>Penerbit: {{ $book ->penerbit_buku }}</dd>
                                <dd>Tahun: {{ $book ->jml_buku }}</dd>
                            </td>
                            <td><p class="btn-holder"><a href="{{ route('add.to.cart', $book->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

        </div>

        
        @yield('scripts')
        <footer class="main-footer">
                @include('template.footer')
        </footer>
    </div>

    @include('sweetalert::alert')

@include('template.script')
</body>
</html>