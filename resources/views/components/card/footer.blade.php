<div {{$attributes->class(["card-footer"])}}>
    <x-lte::dev.info :alias="$componentAlias->value"/>
    {{$slot}}
</div>
