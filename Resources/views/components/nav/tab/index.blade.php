@props(['label'])
<li class="nav-item">
    <a id="custom-content-below-home-tab"
       href="#custom-content-below-{{strtolower($label)}}" role="tab" aria-controls="custom-content-{{strtolower($label)}}-home"
       class="nav-link active" data-toggle="pill" aria-selected="true">
        {{$label}}
    </a>
</li>
