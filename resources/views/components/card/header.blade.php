@props([
    'title' => null,
    'navs' => true
])
<div x-cloak {{$attributes->class([
    'card-header' => false,
    'px-2 pb-0 py-1' => $navs
    ])}} style="border-bottom: solid 1px #ccc">
    <x-lte::dev.info :alias="$componentAlias->value"/>
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
        <div class="flex justify-between">
            {{$slot}}
        </div>
    @endif
</div>
