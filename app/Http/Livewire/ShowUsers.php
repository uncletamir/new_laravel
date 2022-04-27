<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;

class ShowUsers extends Component
{
    public function render()
    {
        $total_jmlh_users = User::where('level','user')->count();
        return view('livewire.show-users', compact('total_jmlh_users'));
    }
}
