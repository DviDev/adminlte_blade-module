<ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
    <x-lte::dev.info :alias="$componentAlias->value"/>
    @if($items)
        {{$items}}
    @else
        <li class="nav-item">
            <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill"
               href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home"
               aria-selected="true">
                Home
            </a>
        </li>
    @endif
</ul>
