<div {{$attributes->class(['card-body flex flex-col'])}}>
    <x-lte::dev.info :alias="$componentAlias->value"/>
    @if(isset($tabs))
        <div {{$tabs->attributes->class(["tab-content"])}} id="custom-tabs-two-tabContent">
            {{$tabs}}
        </div>
    @endif
    @if(isset($nav_tabs))
        <ul {{$nav_tabs->attributes->class(["tab-content"])}} class="nav nav-tabs" id="custom-content-below-tab"
            role="tablist">
            {{$nav_tabs}}
        </ul>
    @endif
    {{$slot}}
</div>
