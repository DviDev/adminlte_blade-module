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
        @push('scripts')
            <script>
                toastrDispatch({ type: 'danger', 'msg': '{!! session('error') !!}' })
            </script>
        @endpush
    @endif
@elseif(session()->has('success'))
    @if(!$only_toastr)
        <div class="alert alert-success">{!! session('success') !!}</div>
    @endif
    @if($toastr || $only_toastr)
        @push('scripts')
            <script>
                toastrDispatch({ type: 'success', 'msg': '{!! session('success') !!}' })
            </script>
        @endpush
    @endif
@elseif(session()->has('warning'))
    @if(!$only_toastr)
        <div class="alert alert-warning">{!! session('warning') !!}</div>
    @endif
    @if($toastr || $only_toastr)
        @push('scripts')
            <script>
                toastrDispatch({ type: 'warning', 'msg': '{!! session('warning') !!}' })
            </script>
        @endpush
    @endif
@endif
