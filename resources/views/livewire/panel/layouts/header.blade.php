<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="/" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset($mini_logo->image??'assets/images/logo-sm-dark.png') }}" alt="" height="22">
                                </span>
                    <span class="logo-lg">
                                    <img src="{{ asset($logo->image??'assets/images/logo-dark.png') }}" alt="" height="40">
                                </span>
                </a>

                <a href="/" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('assets/images/logo-sm-light.png') }}" alt="" height="22">
                                </span>
                    <span class="logo-lg">
                                    <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="40">
                                </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-backburger"></i>
            </button>
        </div>

        <div class="d-flex">
          {{--  <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-flag-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="" src="{{ asset(Config::get('languages')[App::getLocale()]['flag']) }}" alt="Header Language" height="14">
                    {{ Config::get('languages')[App::getLocale()]['name'] }}
                </button>

                <div class="dropdown-menu dropdown-menu-right">

                @foreach (Config::get('languages') as $lang => $language)
                    @if ($lang != App::getLocale())
                    <!-- item-->
                    <a href="{{ route('lang.switch', $lang) }}" class="dropdown-item notify-item">
                        <img src="{{asset($language['flag'])}}" alt="user-image" class="mr-2" height="12"><span class="align-middle">{{$language['name']}}</span>
                    </a>
                    @endif
                @endforeach
                </div>
            </div>--}}
            <div class="dropdown d-inline-block d-lg-none ml-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                     aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..."
                                       aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            {{--<div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="mdi mdi-tune"></i>
                </button>
            </div>--}}
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{asset('assets/images/default/profile.png')}}"
                         alt="Header Avatar">
                    <span
                        class="d-none d-sm-inline-block ml-1">{{ auth()->user()->fullname??'no name' }} </span>
                    <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i
                            class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> ناحیه کاربری</a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/logout"><i
                            class="mdi mdi-logout font-size-16 align-middle mr-1"></i> خروج</a>
                </div>
            </div>

        </div>
    </div>

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-tabs-custom rightbar-nav-tab nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link py-3 active" data-toggle="tab" href="#chat-tab" role="tab">
                        <i class="mdi mdi-human-male-female font-size-22"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-3" data-toggle="tab" href="#tasks-tab" role="tab">
                        <i class="mdi mdi-format-list-checkbox font-size-22"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-3" data-toggle="tab" href="#settings-tab" role="tab">
                        <i class="mdi mdi-settings font-size-22"></i>
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content text-muted">
                <div class="tab-pane active" id="chat-tab" role="tabpanel">

                    <h6 class="px-4 py-3 mt-2 bg-light">پرسنل </h6>


                </div>

                <div class="tab-pane" id="tasks-tab" role="tabpanel">
                    <h6 class="p-3 mb-0 mt-4 bg-light">آخرین وضعیت</h6>

                    <div class="p-2">
                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                            <p class="text-muted mb-0">کلاس های آنلاین<span class="float-right">75%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 75%"
                                     aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                            <p class="text-muted mb-0">کلاس های حضوری<span class="float-right">37%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 37%"
                                     aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                            <p class="text-muted mb-0">تعداد امتحانات<span class="float-right">52%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 52%"
                                     aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>
                    </div>

                    <h6 class="p-3 mb-0 mt-4 bg-light">آمار باربد</h6>

                    <div class="p-2">
                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                            <p class="text-muted mb-0">دوره های شروع شده<span class="float-right">12%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 12%"
                                     aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                            <p class="text-muted mb-0">دوره های اتمام<span class="float-right">67%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 67%"
                                     aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                            <p class="text-muted mb-0">دوره های در انتظار<span class="float-right">84%</span></p>
                            <div class="progress mt-2" style="height: 4px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 84%"
                                     aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </a>
                    </div>

                    <div class="p-3 mt-2">
                        <a href="javascript: void(0);" class="btn btn-success btn-block waves-effect waves-light">ایجاد
                            نمونه</a>
                    </div>

                </div>
                <div class="tab-pane" id="settings-tab" role="tabpanel">
                    <h6 class="px-4 py-3 bg-light">تنظیمات اصلی</h6>

                    <div class="p-4">
                        <h6 class="font-weight-medium">Online Status</h6>
                        <div class="custom-control custom-switch mb-1">
                            <input type="checkbox" class="custom-control-input" id="settings-check1"
                                   name="settings-check1" checked="">
                            <label class="custom-control-label font-weight-normal" for="settings-check1">Show your
                                status to all</label>
                        </div>

                        <h6 class="mt-4">Auto Updates</h6>
                        <div class="custom-control custom-switch mb-1">
                            <input type="checkbox" class="custom-control-input" id="settings-check2"
                                   name="settings-check2" checked="">
                            <label class="custom-control-label font-weight-normal" for="settings-check2">Keep up to
                                date</label>
                        </div>

                        <h6 class="mt-4">Backup Setup</h6>
                        <div class="custom-control custom-switch mb-1">
                            <input type="checkbox" class="custom-control-input" id="settings-check3"
                                   name="settings-check3">
                            <label class="custom-control-label font-weight-normal" for="settings-check3">Auto
                                backup</label>
                        </div>

                    </div>

                    <h6 class="px-4 py-3 mt-2 bg-light">Advanced Settings</h6>

                    <div class="p-4">
                        <h6 class="font-weight-medium">Application Alerts</h6>
                        <div class="custom-control custom-switch mb-1">
                            <input type="checkbox" class="custom-control-input" id="settings-check4"
                                   name="settings-check4" checked="">
                            <label class="custom-control-label font-weight-normal" for="settings-check4">Email
                                Notifications</label>
                        </div>

                        <div class="custom-control custom-switch mb-1">
                            <input type="checkbox" class="custom-control-input" id="settings-check5"
                                   name="settings-check5">
                            <label class="custom-control-label font-weight-normal" for="settings-check5">SMS
                                Notifications</label>
                        </div>

                        <h6 class="mt-4">API</h6>
                        <div class="custom-control custom-switch mb-1">
                            <input type="checkbox" class="custom-control-input" id="settings-check6"
                                   name="settings-check6">
                            <label class="custom-control-label font-weight-normal" for="settings-check6">Enable
                                access</label>
                        </div>

                    </div>
                </div>
            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

</header>
