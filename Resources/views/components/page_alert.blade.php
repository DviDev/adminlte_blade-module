@props([
    'toastr' => false,
    'only_toastr' => null
])
@php
    $only_toastr = $only_toastr ?? session()->has('only_toastr')
@endphp

@if(session()->has('error'))
    @if(!$only_toastr)
        <div class="alert alert-danger">{!! session('error') !!}</div>
    @endif
    @if($toastr || $only_toastr)
        @pushonce('scripts')
            <script>
                toastrDispatch({type: 'danger', 'msg': '{!! session('error') !!}'})
            </script>
        @endpushonce
    @endif
@elseif(session()->has('success'))
    @if(!$only_toastr)
        <div class="alert alert-success">{!! session('success') !!}</div>
    @endif
    @if($toastr || $only_toastr)
        @pushonce('scripts')
            <script>
                toastrDispatch({type: 'success', 'msg': '{!! session('success') !!}'})
            </script>
        @endpushonce
    @endif
@elseif(session()->has('warning'))
    @if(!$only_toastr)
        <div class="alert alert-warning">{!! session('warning') !!}</div>
    @endif
    @if($toastr || $only_toastr)
        @push('scripts')
            <script>
                toastrDispatch({type: 'warning', 'msg': '{!! session('warning') !!}'})
            </script>
        @endpush
    @endif
@elseif(session()->has('info'))
    @if(!$only_toastr)
        <div class="alert alert-info">{!! session('info') !!}</div>
    @endif
    @if($toastr || $only_toastr)
        @push('scripts')
            <script>
                toastrDispatch({type: 'info', 'msg': '{!! session('info') !!}'})
            </script>
        @endpush
    @endif
@endif
