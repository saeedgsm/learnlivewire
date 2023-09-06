<?php

namespace App\Livewire\Panel\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class UserEdit extends Component
{
    use WithFileUploads;
    public $name,$family,$email,$phone,$password,$image,$level;

    protected $rules = [
        'name'=>'required|string|min:2|max:100',
        'family'=>'required|string|min:2|max:100',
        'phone'=>'required|numeric|digits:11|unique:users',
        'email'=>'required|email|min:2|max:100|unique:users',
        'password'=>'required|min:6|max:191',
        'image'=>'nullable|image',
    ];

    protected $validationAttributes = [
        'name' => 'Name Family',
        'email' => 'email address',
        'image' => 'profile image',
        'level' => 'user level',
    ];
    public function Mount(User $user)
    {
        $this->name=$user->name;
        $this->family=$user->family;
        $this->email=$user->email;
        $this->phone=$user->phone;
        $this->phone=$user->phone;
    }

    public function render()
    {
        return view('livewire.panel.pages.users.user-edit');
    }
}
