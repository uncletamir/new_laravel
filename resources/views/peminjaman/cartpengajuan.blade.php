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
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                        <label>Date:</label>
                        <input class="form-control datepicker">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="card-tools">
                            
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <tr>
                            <th>Buku</th>
                            <th>Opsi</th>
                        </tr>
                        @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                        <tr data-id="{{ $id }}">
                            <td data-th="Product">
                                <dt>{{ $details['name'] }}</dt>
                                <dd>{{ $details['price'] }}</dd>
                                <dd>{{ $details['image'] }}</dd>
                                
                            </td>
                            <td class="actions" data-th="">
                                <button class="btn btn-danger btn-sm remove-from-cart"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <input name="id" value="User Id:{{ auth()->user()->id }}" />
                        <br>
                        <input name="data[]" value="{{ $id }}" />
                        
                        @endforeach
                        @endif
                    </table>
                </div>
            </div>
            <a href="{{ route('pengajuanajax')}}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Lanjutkan Pencarian Buku</a>
                <button class="btn btn-success">Ajukan Peminjaman</button>
        </div>
        

        </div>
        

        
       
        <footer class="main-footer">
                @include('template.footer')
        </footer>
    </div>
    @include('sweetalert::alert')

@include('template.script')
</body>
</html>