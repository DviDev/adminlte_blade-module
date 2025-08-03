@props(['label'])
<div class="tab-content" id="custom-content-{{strtolower($label)}}-tabContent">
    <x-lte::dev.info :alias="$componentAlias->value"/>
    <div id="custom-content-below-{{strtolower($label)}}"
         aria-labelledby="custom-content-below-{{strtolower($label)}}-tab"
         role="tabpanel" class="tab-pane fade active show"
    >
        {{$slot}}
    </div>
</div>
