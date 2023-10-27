@props([
    'title'
])
<div :class="tab === '{{strtolower($title)}}' ? 'tab-pane fade show active' : 'tab-pane fade'"
     style="display: none"
     x-show="tab === '{{strtolower($title)}}'"
     id="{{'custom-tabs-'.$title}}-home" role="tabpanel"
     aria-labelledby="{{'custom-tabs-'.$title.'-tab'}}"
>
    {{$slot}}
</div>
