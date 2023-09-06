<div class="vertical-menu">
    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title"></li>
                <li>
                    <a href="/panel" wire:navigate class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="fa fa-gauge"></i></div>
                        <span>{{ucfirst(__('text.dashboard'))}}</span>
                    </a>
                </li>
                <li>
                    <a href="/users" wire:navigate class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="fa fa-gauge"></i></div>
                        <span>{{ucfirst(__('text.users'))}}</span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
