<div class="d-flex order-lg-2 ml-auto">
    <div class="dropdown">
        <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
            <span class="avatar" style=""></span>
            <span class="ml-2 d-none d-lg-block">
                <span class="text-default">Jane Pearson</span>
                <small class="text-muted d-block mt-1">Administrador</small>
            </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
            {{--            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
            {{--                <i class="dropdown-icon fe fe-log-out"></i> {{ __('Logout') }}--}}
            {{--            </a>--}}
            {{--            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
            {{--                @csrf--}}
            {{--            </form>--}}
            <a class="dropdown-item" href="#"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="#" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>
<a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
    <span class="header-toggler-icon"></span>
</a>
