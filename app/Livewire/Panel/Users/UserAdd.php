<?php

namespace App\Livewire\Panel\Users;

use App\Models\User;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class UserAdd extends Component
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

    public function store()
    {

        $this->validate();
        if ($this->image){
            $imageName = time().Str::random(8).'.'.$this->image->extension();
            $this->image->storeAs('images',$imageName);
        }else{
            $imageName='';
        }
        User::create([
            'id'=>Str::uuid(),
            'name'=>$this->name,
            'family'=>$this->family,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'password'=>$this->password,
            'image'=>$imageName,
        ]);
        session()->flash('success','با موفقیت ذخیره شد!');
        return $this->redirect()->to('/users');
    }

    public function render()
    {
        return view('livewire.panel.pages.users.user-add');
    }
}
