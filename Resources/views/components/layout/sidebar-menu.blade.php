@props([
    'items' => []
])
<nav class="mt-2 pb-10">

    <ul class="nav nav-pills nav-sidebar flex-column pb-4" data-widget="treeview" role="menu"
        data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        @foreach($items as $key => $menuItems)
            @php
                $active = collect($menuItems)->map(fn($i) => $i['url'])->contains(Request::fullUrl());
            @endphp
            <li @class([
                    "nav-item",
                    "menu-open" => $active,
                    ])>
                <a href="#" @class(["nav-link", "active" => $active])>
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
                                @class(["nav-link", "active" => Request::fullUrl() == $item['url']])>
                                {!! $item['icon'] !!}
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

        <li class="nav-item">
            <a href="{{route('lte.pages.dashboard1')}}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>Page Examples</p>
            </a>
        </li>

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
