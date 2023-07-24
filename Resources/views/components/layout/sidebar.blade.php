@props([
  'items' => []
])
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class=" text-gray my-auto" style="width: 35px">
            <x-dvui::icon.user.circle class="img-circle elevation-2" alt="{{auth()->user()?->name}}"/>
        </div>
        <div class="info grow my-auto">
            @auth()
                <a href="{{route('profile')}}" class="">
                   {{ str(Auth::user()->name)->words(2, '') }}
                </a>
            @endauth
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2 pb-4">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            @foreach($items as $key => $menuItems)
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>
                            {{$key}}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @foreach($menuItems as $item)
                            <li class="nav-item">
                                <a href="{{$item['url']}}"
                                    @class(["nav-link", "active" => $item['active'] ?? false])>
                                    <i class="nav-icon {{$item['icon']}} text-xs"></i>
                                    <p>{{$item['label']}}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach

            @if(isset($items['admin']))
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>
                            Admin
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @foreach($items['admin']??[] as $item)
                            <li class="nav-item">
                                <a href="{{$item['url']}}"
                                    @class(["nav-link", "active" => $item['active'] ?? false])>
                                    <i class="nav-icon {{$item['icon']}}"></i>
                                    <p>{{$item['label']}}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endif

            @if(isset($items['store']))
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>
                            Store
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @foreach($items['store']??[] as $item)
                            <li class="nav-item">
                                <a href="{{$item['url']}}"
                                    @class(["nav-link", "active" => $item['active'] ?? false])>
                                    <i class="nav-icon {{$item['icon']}}"></i>
                                    <p>{{$item['label']}}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endif

            @if(isset($items['devops']))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>
                            Devops
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @foreach($items['devops'] as $item)
                            <li class="nav-item">
                                <a href="{{$item['url']}}"
                                   target="{{$item['target'] ?? '_self'}}"
                                    @class(["nav-link", "active" => $item['active'] ?? false])>
                                    <i class="nav-icon {{$item['icon']}}"></i>
                                    <p>{{$item['label']}}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endif
            @if(\Illuminate\Support\Facades\Route::has('logout'))
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{route('logout') }}"
                           class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="nav-icon fas fa-power-off text-red-700"></i>
                            <p>Sair</p>
                        </a>
                    </form>
                </li>
            @endif

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
