<?php

namespace App\Livewire;

use App\Models\DamageProduct;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class Damages extends Component
{
    public $search;

    #[Computed()]
    #[On('damages-changed')]
    public function damages()
    {
        return DamageProduct::with(['product', 'user'])->whereRelation('product', 'name', 'LIKE', "%{$this->search}%")->paginate(25);
    }


    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.damages', [
            'total' => DamageProduct::count(),
        ]);
    }
}
