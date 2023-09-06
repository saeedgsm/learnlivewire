<div class="page-content">
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h4 class="page-title mb-1">{{__('text.editUser')}}</h4>
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="/panel" wire:navigate>{{__('text.dashboard')}}</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/users" wire:navigate>{{__('text.users')}}</a>
                        </li>
                        <li class="breadcrumb-item active">{{__('text.editUser')}}</li>
                    </ol>
                </div>

            </div>

        </div>
    </div>
    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">{{__('text.editUser')}}</h4>
                            <p class="card-title-desc">
                            @if(\Illuminate\Support\Facades\Session::has('success'))
                                <div class="alert bg-success">
                                    <strong>{{\Illuminate\Support\Facades\Session::get('success')}}</strong>
                                </div>
                            @endif

                            <form wire:submit.prevent="update" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="name">{{__('text.name')}} </label>
                                            <input id="name" type="text"
                                                   class="form-control @error('name') is-invalid @enderror"
                                                   name="name" wire:model.defer="name"
                                                   value="{{ old('name') }}"
                                                   placeholder="{{__('text.name')}}">
                                            @error('name')
                                            <span class="error text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="family">{{__('text.family')}} </label>
                                            <input id="family" type="text"
                                                   class="form-control @error('family') is-invalid @enderror"
                                                   name="family" wire:model.defer="family"
                                                   value="{{ old('family') }}"
                                                   placeholder="{{__('text.family')}}">
                                            @error('family')
                                            <span class="error text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="email"><span>{{__('text.email')}} </span></label>
                                            <input id="email" type="text" autocomplete="off"
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email" wire:model.defer="email"
                                                   value="{{ old('email') }}"
                                                   placeholder="{{__('text.email')}}">
                                            @error('email')
                                            <span class="error text-danger" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="phone"><span>{{__('text.phone')}} </span></label>
                                            <input id="phone" type="text"
                                                   class="form-control @error('phone') is-invalid @enderror"
                                                   name="phone" wire:model.defer="phone"
                                                   value="{{ old('phone') }}"
                                                   placeholder="{{__('text.phone')}}">
                                            @error('phone')
                                            <span class="error text-danger" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="password" class="control-label">{{__('text.password')}} </label>
                                            <input type="password"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   name="password" wire:model.defer="password"
                                                   id="password"
                                                   placeholder="{{__('text.password')}}"
                                                   value="{{ old('password') }}">
                                            @error('password')
                                            <span class="error text-danger" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="level" class="control-label">{{__('text.level')}} </label>
                                            <select name="level" id="level" class="form-control" wire:model="level">
                                                <option value="2">{{__('text.user')}}</option>
                                                <option value="1">{{__('text.admin')}}</option>
                                            </select>
                                            @error('password')
                                            <span class="error text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="row col-lg-12">
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <div
                                                    x-data="{ uploading: false, progress: 0 }"
                                                    x-on:livewire-upload-start="uploading = true"
                                                    x-on:livewire-upload-finish="uploading = false"
                                                    x-on:livewire-upload-error="uploading = false"
                                                    x-on:livewire-upload-progress="progress = $event.detail.progress"
                                                >
                                                    <!-- File Input -->
                                                    <input type="file" wire:model="image">

                                                    <!-- Progress Bar -->
                                                    <div x-show="uploading">
                                                        <progress max="100" x-bind:value="progress"></progress>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            {{__('text.profileImage')}}:
                                            @if ($image)

                                                <img width="128" class="img-thumbnail" src="{{ $image->temporaryUrl() }}">
                                            @else
                                                <img width="128" class="img-thumbnail" src="{{ asset('assets/images/default/profile.png') }}">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mt-4">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                {{__('text.save')}}
                                            </button>
                                            <button type="reset"
                                                    class="btn btn-secondary waves-effect m-l-5">
                                                {{__('text.reset')}}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
