<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Teste extends Component
{
    public string $search = '';
    public function render()
    {
        return view('livewire.teste', [
            'users' => User::query()
                ->when($this->search, fn($query, $search) => $query->where('name', 'like', "%$search%"))
                ->get()
        ]);
    }
}
