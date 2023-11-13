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
    <x-lte::layout.sidebar-menu :items="$items"/>
</div>
