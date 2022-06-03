<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Buku;

class SearchBook extends Component
{
    use WithPagination;
    public $searchTerm;


    public function render()
    {
      $searchTerm = '%'. $this->searchTerm . '%';
      $this->buku = Buku::where('judul_buku', 'like', $searchTerm)->paginate(3);
      return view('livewire.search-book');

      // $searchTerm = '%'.$this->searchTerm.'%';
      //   return view('livewire.search-book',[
      //       'buku' => Buku::where('judul_buku','like', $searchTerm)->paginate(3)
      //   ]);

      // if(!empty($query = $request->input('judul_buku'))) {
      //  $cari = Buku::where('judul_buku', 'like', "%$query%")->paginate(2);
      //  return view('peminjaman.pengajuan-peminjaman',compact('cari'));
      //  } else {
      //    $cari = Buku::paginate(2);
      //    return view('peminjaman.pengajuan-peminjaman',compact('cari'));
      //  }
      //   return view('livewire.search-book');
    }
}
