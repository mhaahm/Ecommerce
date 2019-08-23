<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        @yield('title')
    </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    @section('stylesheet')
        <link rel="shortcut icon" href="img/favicon.ico"/>
        <link href="{{asset('vendors/toastr/css/toastr.min.css')}}" rel="stylesheet"/>
        <link type="text/css" rel="stylesheet" href="{{asset('css/app.css')}}"/>
        <link rel="stylesheet" href="{{asset('vendors/swiper/css/swiper.min.css')}}">
        <link href="{{asset('vendors/nvd3/css/nv.d3.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('vendors/lcswitch/css/lc_switch.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css')}}">
        <link href="{{ asset('css/custom_css/dashboard1.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/custom_css/dashboard1_timeline.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/custom_css/toastr_notificatons.css') }}" rel="stylesheet"/>
    @show
</head>
<script language="JavaScript">
    window.Global_Url = "{{route('home')}}";
</script>
<body class="skin-default">
<div class="preloader">
    <div class="loader_img"><img src="{{asset("img/loader.gif")}}" alt="loading..." height="64" width="64"></div>
</div>
@include('Partials.header')
<div class="wrapper row-offcanvas row-offcanvas-left">
@include('Partials.leftSide')
    <aside class="right-side">
        @include('Partials.rightHeader')
        @yield("content")
    </aside>
</div>

<div id="qn"></div>

@section('javascript')
<script src="{{asset("js/app.js")}}" type="text/javascript"></script>

<script type="text/javascript" src="{{asset("vendors/flip/js/jquery.flip.min.js")}}"></script>
<script type="text/javascript" src="{{asset("vendors/lcswitch/js/lc_switch.min.js")}}"></script>
<script type="text/javascript" src="{{asset("vendors/swiper/js/swiper.min.js")}}"></script>
<script  type="text/javascript" src="{{asset("vendors/chartjs/js/Chart.js")}}"></script>
<script type="text/javascript" src="{{asset("js/nvd3/d3.v3.min.js")}}"></script>
<script type="text/javascript" src="{{asset("vendors/nvd3/js/nv.d3.min.js")}}"></script>
<script type="text/javascript" src="{{asset("vendors/moment/js/moment.min.js")}}"></script>
<script type="text/javascript" src="{{asset("vendors/advanced_newsTicker/js/newsTicker.js")}}"></script>
<script  type="text/javascript" src="{{asset('vendors/toastr/js/toastr.min.js')}}"></script>
<script type="text/javascript" src="{{asset("js/utils.js")}}"></script>
<!-- end of page level js -->
@show
</body>

</html>