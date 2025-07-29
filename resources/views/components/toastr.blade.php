@pushonce('styles')
    @if(config('app.env') == 'local')
        <!-- TOASTR CSS-->
    @endif
    <link rel="stylesheet" href="{{asset('assets/modules/lte/plugins/toastr/toastr.min.css')}}">
@endpushonce

@pushonce('scripts')

    @if(config('app.env') == 'local')
        <!-- TOASTR JS-->
    @endif

    <script src="{{asset('assets/modules/lte/plugins/toastr/toastr.min.js')}}"></script>
    <script>
        window.addEventListener('toastr', event => {
            const msg = event.detail.msg
            const type = event.detail.type
            if (type === 'success') toastr.success(msg)
            if (type === 'info') toastr.info(msg)
            if (type === 'warning') toastr.warning(msg)
            if (type === 'error') toastr.error(msg)
        })
    </script>
@endpushonce
