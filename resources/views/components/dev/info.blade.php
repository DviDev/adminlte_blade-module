@props([
    'alias'
])

<x-dvui::dev.info suite="{{config('lte.name_lower')}}" :alias="$alias"/>
