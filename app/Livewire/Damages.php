<?php

namespace App\Livewire;

use App\Models\DamageProduct;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Damages extends Component
{
    #[Computed()]
    public function damages()
    {
        return DamageProduct::paginate(25);
    }


    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.damages', [
            'total' => DamageProduct::count(),
        ]);
    }
}
