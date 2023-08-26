<!-- headers-->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="สูตรบาคาร่า5ดาว">
    <meta name="keywords" content="">
    <meta name="description" content="{{ get_facebook_detail() }}">
    <title> @yield('title')</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('img/favicon-32x32.png') }}" />

    <meta property="og:url"           content="http://สูตรบาคาร่า5ดาว.com/" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{ get_title_facebook() }}" />
    <meta property="og:image"         content="{{ get_facebook_img() }}?v{{time()}}" />
    <meta property="og:description"   content="{{ get_facebook_detail() }}" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="314" />
    
    @include('layouts.inc-style')
    @yield('stylesheet')

</head>

<body class="layout-row">
    

        @if (Auth::guest())
        @else
        @php
        $today = date("Y-m-d H:i"); 
        $startdate = Auth::user()->birthday; 
        $offset = strtotime("+1 day");
        $enddate = date($startdate, $offset);    
        $today_date = new DateTime($today);
        $expiry_date = new DateTime($enddate);
        @endphp
        @if($expiry_date < $today_date) 
        <script>window.location = "{{ url('/logout') }}";</script>
        @endif
   
@endif

        @yield('content')


    

    <!-- JavaScripts -->
    @include('layouts.inc-script')
    @yield('scripts')

    
</body>

</html>