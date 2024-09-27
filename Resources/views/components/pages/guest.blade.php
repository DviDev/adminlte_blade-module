<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    {{--    <link rel="stylesheet" href="{{asset('assets/modules/lte/plugins/fontawesome-free/css/all.min.css')}}">--}}
    <link rel="stylesheet" href="{{asset('assets/modules/lte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/modules/lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/modules/lte/dist/css/adminlte.min.css')}}">
{{--    <link rel="icon" type="image/png" sizes="192x192" href="/favicons/android-icon-192x192.png">--}}
</head>
<body class="hold-transition login-page">
{{$slot}}
<!-- jQuery -->
<script src="{{asset('assets/modules/lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/modules/lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/modules/lte/dist/js/adminlte.js')}}"></script>
</body>
</html>
