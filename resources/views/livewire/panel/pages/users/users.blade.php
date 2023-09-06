<div>
    <div class="page-content">
        <div class="page-title-box">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <h4 class="page-title mb-1">{{__('text.users')}}</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="/panel" wire:navigate>{{__('text.dashboard')}}</a>
                            </li>
                            <li class="breadcrumb-item active">{{__('text.users')}}</li>
                        </ol>
                    </div>
                    <div class="col-md-8">
                        <div class="float-right">
                            <a href="/add-user" wire:navigate class="btn btn-light btn-rounded">
                                <i class="mdi mdi-plus mr-1"></i>{{__('text.add')}}
                            </a>
                        </div>
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
                                <h4 class="header-title">{{__('text.users')}}</h4>
                                <p class="card-title-desc">
                                    @if(\Illuminate\Support\Facades\Session::has('success'))
                                        <div class="alert bg-success">
                                            <strong class="text-white">{{\Illuminate\Support\Facades\Session::get('success')}}</strong>
                                        </div>
                                    @endif
                                </p>

                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                        <tr>
                                            <th>{{__('text.name')}}</th>
                                            <th>{{__('text.userInfo')}}</th>
                                            <th>{{__('text.date')}}</th>
                                            <th>{{__('text.setting')}}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                                <tr>
                                                    <td>{{$user->fullname ??__('text.unknown')}}</td>
                                                    <td>
                                                        <span>{{__('text.phone')}}</span>
                                                        <span>{{$user->phone??__('text.unknown')}}</span><br>
                                                        <span>{{__('text.email')}}</span>
                                                        <span>{{$user->email??__('text.unknown')}}</span>
                                                    </td>
                                                    <td>{{\Carbon\Carbon::parse($user->created_at)->format('Y/m/d H:i')??__('text.unknown')}}</td>
                                                    <td>
                                                        <form action="#"
                                                              method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <a href="/edit-user/{{$user->id}}"
                                                               class="btn btn-outline-info waves-effect waves-light">{{__('text.edit')}}</a>
                                                            <button type="submit"
                                                                    onclick="{return confirm('از حذف کاربر مطمئن هستید؟')}"
                                                                    class="btn btn-outline-danger waves-effect waves-light">
                                                                {{__('text.delete')}}
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
