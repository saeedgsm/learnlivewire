<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use function session;
use function view;

class TaskComp extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $password;
    public $image;

    protected $rules = [
        'name'=>'required|string|min:2|max:100',
        'email'=>'required|email|min:2|max:100',
        'password'=>'required|min:6|max:20',
        'image'=>'nullable|image|max:300',
    ];

    protected $validationAttributes = [
        'name' => 'Name Family',
        'email' => 'email address',
        'image' => 'profile image',
    ];

    public function mount()
    {

    }
    public function render()
    {
        return view('livewire.task-comp');
    }

    public function store()
    {
        $this->validate();
        $imageName = time().Str::random(8).'.'.$this->image->extension();
        $this->image->storeAs('images',$imageName);
        User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password,
            'image'=>$imageName,
        ]);
        session()->flash('success','با موفقیت ذخیره شد!');
    }
}
