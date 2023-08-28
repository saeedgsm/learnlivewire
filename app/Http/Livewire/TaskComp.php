<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TaskComp extends Component
{
    public $name;
    public $new_task;
    public $task_array=['111',222];

    public function addNewTask( )
    {
        array_push($this->task_array,$this->new_task);
    }
    public function mount($name)
    {
        $this->name=$name;
    }
    public function render()
    {
        return view('livewire.task-comp');
    }
}
