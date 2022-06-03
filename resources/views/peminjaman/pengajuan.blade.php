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
                    <div class="card-tools">

                            <div class="dropdown">
                                <button type="button" class="btn btn-info" data-toggle="dropdown">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                </button>
                                <div class="dropdown-menu">
                                    <div class="row total-header-section">
                                        <div class="col-lg-6 col-sm-6 col-6">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                        </div>
                                        @php $total = 0 @endphp
                                        @foreach((array) session('cart') as $id => $details)
                                            
                                        @endforeach
                                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                                        </div>
                                    </div>
                                    @if(session('cart'))
                                        @foreach(session('cart') as $id => $details)
                                            <div class="row cart-detail">
                                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                    <img src="{{ $details['image'] }}" />
                                                </div>
                                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                    <p>{{ $details['name'] }}</p>
                                                    <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                            <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div> 
                    @endif
                    <table class="table table-bordered">
                        <tr>
                            <th>Judul Buku</th>
                            <th>Pengaran Buku</th>
                            <th>Penerbit Buku</th>
                            <th>Tahun Terbit</th>
                            <th>Opsi</th>
                        </tr>
                        @foreach($books as $book)
                        <tr>
                            <td>{{ $book ->judul_buku }}</td>
                            <td>{{ $book ->pengarang_buku }}</td>
                            <td>{{ $book ->penerbit_buku }}</td>
                            <td>{{ $book ->jml_buku }}</td>
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