@extends('peminjaman.pengajuan')
   
@section('content')
    
<div class="row">
    @foreach($books as $book)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                
                <div class="caption">
                    <h4>{{ $book->judul_buku }}</h4>
                    <p>{{ $book->penerbit_buku }}</p>
                    <p><strong>Price: </strong> {{ $book->jml_buku }}$</p>
                    <p class="btn-holder"><a href="{{ route('add.to.cart', $book->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
    
@endsection