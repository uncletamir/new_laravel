<div class="col-md-6">
  <div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">Cari Buku</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="form-group">
        <form action="#" method="GET">
          <div class="input-group input-group-sm">
            <input type="text" wire:model="searchTerm"  placeholder="Cari Judul Buku">
            <!-- <input type="text" class="form-control" wire:model="searchTerm" id="judul_buku" name="judul_buku" placeholder="Cari...."> -->
            <span class="input-group-append">
              <button type="submit" class="btn btn-info btn-flat">Cari</button>
            </span>
          </div>
        </form>
      </div>
      <div class="card-body p-0">
        <table class="table">
          <thead>
            <tr>
              <th>Judul Buku</th>
              <th>Pengarang Buku</th>
              <th>Tahun Terbit</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($buku as $item)
              <tr>
                <td>{{ $item->judul_buku }}</td>
                <td>{{ $item->penerbit_buku }}</td>
                <td>{{ $item->jml_buku }}</td>
                <td class="text-right py-0 align-middle">
                  <div class="btn-group btn-group-sm">
                    <form class="" action="{{route('tambahpengajuan.store')}}" method="POST">
                      @csrf
                      <input type="hidden" name="id" value="{{$item->id}}">
                      <input type="hidden" name="price" value="1">
                      <input type="hidden" name="qty" value="1">
                      <button type="submit" class="btn btn-block btn-success btn-sm"><i class="fas fa-plus"></i></button>
                        <!-- <a href="#" class="btn btn-success"><i class="fas fa-plus"></i></a> -->
                    </form>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer clearfix">
      {{ $buku->onEachSide(1)->links() }}
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
