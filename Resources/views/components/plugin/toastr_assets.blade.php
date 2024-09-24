@pushonce('toastr_css')
    <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
@endpushonce

@pushonce('jquery_js')
    {{--jquery necessary in toastr--}}
    {{--<script src="{{asset("plugins/jquery/jquery.min.js")}}"></script>--}}
@endpushonce

@pushonce('toastr_js')
    <script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
    <script>
        function toastrDispatch(obj) {
            toastr.options = {
                'closeButton': obj.options?.closeButton ?? true,
                'debug': obj.options?.debug ?? false,
                'newestOnTop': obj.options?.newestOnTop ?? true,
                'progressBar': obj.options?.progressBar ?? true,
                'positionClass': obj.options?.positionClass ?? 'toast-top-right',
                'preventDuplicates': obj.options?.preventDuplicates ?? true,
                'onclick': obj.options?.onclick ?? null,
                'showDuration': obj.options?.showDuration ?? '300',
                'hideDuration': obj.options?.hideDuration ?? '1000',
                'timeOut': obj.options?.timeOut ?? '5000',
                'extendedTimeOut': obj.options?.extendedTimeOut ?? '1000',
                'showEasing': obj.options?.showEasing ?? 'swing',
                'hideEasing': obj.options?.hideEasing ?? 'linear',
                'showMethod': obj.options?.showMethod ?? 'fadeIn',
                'hideMethod': obj.options?.hideMethod ?? 'fadeOut'
            }

            if (obj.type === 'success') toastr.success(obj.msg)
            if (obj.type === 'info') toastr.info(obj.msg)
            if (obj.type === 'warning') toastr.warning(obj.msg)
            if (obj.type === 'error') toastr.error(obj.msg)
        }

        window.addEventListener('toastr', event => {
            const detail = event.detail[0];
            let obj = {
                options: {
                    'closeButton': detail.closeButton,
                    'debug': detail.debug,
                    'newestOnTop': detail.newestOnTop,
                    'progressBar': detail.progressBar,
                    'positionClass': detail.positionClass,
                    'preventDuplicates': detail.preventDuplicates,
                    'onclick': detail.onclick,
                    'showDuration': detail.showDuration,
                    'hideDuration': detail.hideDuration,
                    'timeOut': detail.timeOut,
                    'extendedTimeOut': detail.extendedTimeOut,
                    'showEasing': detail.showEasing,
                    'hideEasing': detail.hideEasing,
                    'showMethod': detail.showMethod,
                    'hideMethod': detail.hideMethod
                },
                msg: detail.msg,
                type: detail.type
            }
            toastrDispatch(obj)
        })
    </script>
@endpushonce
