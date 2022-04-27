<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Buku;

class ShowBook extends Component
{
    public function render()
    {
        $total_jmlh = Buku::count();
        return view('livewire.show-book', compact('total_jmlh'));
    }
}
