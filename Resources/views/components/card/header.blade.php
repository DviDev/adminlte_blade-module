@props([
    'title' => null,
    'navs' => true
])
<div x-cloak {{$attributes->class([
    'card-header',
    'px-2 pt-2 pb-0 border-bottom-0' => $navs
    ])}}>
    @if($slot && $navs)
        <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
            @if($title)
                <li class="pb-2 px-3">
                    <h3 class="card-title font-bold">{{$title}}</h3>
                </li>
            @endif
            {{$slot}}
        </ul>
    @else
        {{$slot}}
    @endif
</div>
