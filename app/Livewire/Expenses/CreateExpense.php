<?php

namespace App\Livewire\Expenses;

use App\Models\PaymentMethod;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateExpense extends Component
{
    #[Url()]
    #[Validate('required')]
    public ?int $payment_method_id;

    #[Validate('required|max:100|min:5')]
    public ?string $item = '';

    #[Validate('required|numeric|max:999999999')]
    public $cost;

    public function store()
    {
        $validated = $this->validate();

        //create expense
    }

    public function render()
    {
        return view('livewire.expenses.create-expense', [
            'payments' => PaymentMethod::get(),
        ]);
    }
}
