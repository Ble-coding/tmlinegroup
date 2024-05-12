<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Title -->
    {{-- <title>{{ config('app.name') }} - {{ config('app.subtile') }}</title> --}}
    <title>@yield('title')</title>
    <!-- Stylesheets -->

        {!! SEOMeta::generate() !!}
        {!! OpenGraph::generate() !!}
        {!! Twitter::generate() !!}

    @include('layouts.head')

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    {{-- <link rel="canonical" href="https://tmlinegroupe.com/"> --}}
    <link rel="canonical" href="http://localhost:8000/">

    <style>
        .service-content {
            display: none;
        }
    </style>

</head>

<body>

<div class="wrapper_box">
   
    <!-- Preloader -->
    @include('layouts.preloader')
    
    {{-- header --}}
    @include('layouts.header')
 
    {{-- SlideSousHeader  --}}
    @include('layouts.slide')


    @yield('content')
        
        
    @include('layouts.footer')
    
    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fas fa-arrow-up"></span></div>

</div>  



<!--End pagewrapper-->
    @include('layouts.footer-scripts')
</body>
</html>