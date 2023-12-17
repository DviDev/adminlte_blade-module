@props([
    'title' => __('base.attention'),
    'confirm_label' => null,
    'msg' => __('base.Continue').'?',
    'id' => 'default',
    'danger' => false,
    'info' => false,
    'success' => false,
])
<div class="modal fade" id="modal-{{$id}}" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div @class(['modal-header flex items-center', 'text-red-500' => $danger])>
                <i @class(["fas fa-exclamation-triangle", 'text-red-500' => $danger])></i>
                <h4 class="modal-title ml-2 font-bold">{{str($title)->ucfirst()}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="{{__('close')}}">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>{{$msg}}</p>
                @if(isset($slot))
                    {{$slot}}
                @endif
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    {{str(__('base.cancel'))->ucfirst()}}
                </button>
                <button type="button"
                        {{$attributes->class([
                            'btn text-white',
                            'bg-danger' => $danger,
                            'bg-blue-600' => $info,
                            'bg-green-500' => $success,
                            'bg-light border' => !$danger && !$info && !$success
                        ])}}
                        data-dismiss="modal"
                    {{$attributes->filter(fn($value, $key) => $key == 'wire:click')}}
                >
                    @if(!$confirm_label)
                    {{str(__('base.confirm'))->ucfirst()}}
                    @else
                        {{$confirm_label}}
                    @endif
                </button>
            </div>
        </div>
    </div>
</div>
