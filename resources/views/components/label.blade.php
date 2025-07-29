@props([
    'for' => null,
    'value' => '',
    'required' => false
])
<label {{ $attributes->class([
    'block',
    'font-medium' => $required,
    'text-gray-700' => !$errors->has($for),
    'text-danger' => $errors->has($for),
    ])}}
       for="{{$for}}"
       style="border-bottom: none !important; margin-bottom: 0 !important;"
       @if($errors->has($for))
           title="{{collect($errors->get($for))->first()}}"
    @endif
>
    @if(!empty($value) || isset($slot))
        <span @if($attributes->has('required')) style="float: left" title="{{__('required')}}" @endif>
            {!! !empty($value) ? $value : $slot !!}
        </span>
        @if($required)
            <sup style="font-size: 20px" class="">
                <i class="fas fa-asterisk text-danger " style="font-size: 7px; position: relative; top: 4px"></i>
            </sup>
        @endif
    @endif
</label>
