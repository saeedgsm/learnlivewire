
<div class="box-border h-32 w-32 p-4 border-4">
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert bg-success">
            <strong>{{\Illuminate\Support\Facades\Session::get('success')}}</strong>
        </div>
    @endif
    @if ($image)
        Photo Preview:
        <img width="300" src="{{ $image->temporaryUrl() }}">
    @endif
    <div wire:offline>
        <div class="alert bg-danger">
            <strong> You are now offline.</strong>
        </div>
    </div>
    <form wire:submit.prevent="store" enctype="multipart/form-data">
        <div wire:loading>
            Processing Payment...
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" wire:model.defer="name" name="name" class="form-input px-4 py-3 rounded-full" value=""
                   id="name">
            @error('name') <span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group">
            <label for="email">Mail</label>
            <input type="text" wire:model.defer="email" name="email" class="form-input px-4 py-3 rounded-full" value=""
                   id="email">
            @error('email') <span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" wire:model.defer="password" name="password" class="form-input px-4 py-3 rounded-full"
                   value="" id="password">
            @error('password') <span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group">
            <label for="image">Profile Image</label>
            <input type="file" wire:model.defer="image" name="image" class="form-input px-4 py-3 rounded-full" value=""
                   id="image">
            @error('image') <span class="text-danger">{{$message}}</span>@enderror
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-info btn-sm" value="Submit">
        </div>
    </form>

</div>

