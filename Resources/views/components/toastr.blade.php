@pushonce('styles')
    <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
@endpushonce
@pushonce('scripts')
    <script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
    <script>
        window.addEventListener('toastr', event => {
            console.log('called via toastr component')
            const msg = event.detail.msg
            const type = event.detail.type
            if (type === 'success') toastr.success(msg)
            if (type === 'info') toastr.info(msg)
            if (type === 'warning') toastr.warning(msg)
            if (type === 'error') toastr.error(msg)
        })
    </script>
@endpushonce
