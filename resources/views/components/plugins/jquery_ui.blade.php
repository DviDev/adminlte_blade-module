@pushonce('jquery_ui_js')
    <script src="{{asset("assets/modules/lte/plugins/jquery-ui/jquery-ui.min.js")}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
@endpushonce
