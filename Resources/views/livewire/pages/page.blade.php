@php
    $navbar_menu_items = $this->getItems();
    $sidebar_menu_items = $this->getSidebarMenuItems();
@endphp
<div>
    <x-lte::layout.page
        :tailwind_css="false"
        :header="'Dashboard'"
        :navbar_menu_items="$navbar_menu_items"
        :sidebar_menu_items="$sidebar_menu_items"
    >
        @if(isset($slot))
            {{$slot}}
        @endif
    </x-lte::layout.page>
</div>
