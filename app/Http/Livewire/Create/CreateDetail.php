<?php

namespace App\Http\Livewire\Create;

use Livewire\Component;

class CreateDetail extends Component
{
    public $data;
    public function render()
    {
        return <<<'blade'
            <div>
            <h2>test detail</h2>
                {{-- The whole world belongs to you. --}}
            </div>
        blade;
    }
}
