@props([
    'items' => []
])
<div class="flex flex-col">
    <div class="sidebar flex flex-col grow !px-0">
        <div class="px-2 grow">
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

            <div class="grow flex flex-col">
                <nav class="grow mt-2 pb-10">
                    <ul class="nav nav-pills nav-sidebar flex-column pb-4" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        @foreach($items as $key => $menuItems)
                            @continue(!isset($menuItems['items']) || count($menuItems['items']) == 0)
                            @php
                                $active = collect($menuItems['items'])->map(fn($i) => $i['url'])->contains(Request::fullUrl());
                            @endphp
                            <li @class([
                                "nav-item",
                                "menu-open" => $active,
                                ])>
                                <a href="#"
                                   @class(["nav-link", "active" => $active]) title="{{$menuItems['title'] ?? $key}}">
                                    <i class="nav-icon fas fa-user-shield"></i>
                                    <p>
                                        {{$key}}
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    @foreach($menuItems['items'] as $item)
                                        <li class="nav-item">
                                            <a
                                                {{--                                wire:navigate.hover--}}
                                                href="{{$item['url']}}"
                                                @class(["nav-link", "active" => Request::fullUrl() == $item['url']])>
                                                {!! $item['icon'] !!}
                                                <p>{{$item['label']}}</p>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </nav>

            </div>
        </div>
        <div class="bg-gray-800 text-white p-2">
            <!-- Conteúdo do rodapé -->
            <div class="grow nav-item">
                <a wire:click="logout" class="nav-link cursor-pointer flex space-x-2 items-center"
                   onclick="event.preventDefault();">
                    <i class="nav-icon fas fa-power-off text-red-700"></i>
                    <p>Sair</p>
                    <x-dvui::icon.cog mini s4 class="animate-spin" wire:loading wire:target="logout"/>
                </a>
            </div>
        </div>
    </div>

</div>
