<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public $name;
    public $family;

    public function increment()
    {
        $this->count++;
    }

    public function changeName()
    {
        $this->name='vahid';
        $this->family='gsm';
    }

    public function mount($post)
    {
        $this->name=$post['name'];
        $this->family=$post['family'];
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
