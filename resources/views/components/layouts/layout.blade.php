<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>salespro || {{$title}}</title>
    @include('layouts.styles')
</head>
<body>
<div class="wrapper">
    <div class="lobibox-notify-wrapper top right"></div>


    {{$slot}}

</div>

@include('layouts.scripts')
@stack('javascript-files')

@session('success')
<script>
    round_success_notification(`{{session('success')}}`)
</script>
@endsession
@session('error')
<script>
    round_error_notification(`{{session('error')}}`)
</script>
@endsession
</body>
</html>
