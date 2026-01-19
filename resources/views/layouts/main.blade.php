<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Magnito Technologies - Technology Partners Who Deliver Tomorrow, Today. Enterprise IT Solutions & SaaS Development Company offering custom software, School ERP, and digital transformation services.">
    <meta name="keywords"
        content="IT Solutions, SaaS Development, School ERP, Custom Software, Digital Transformation, Enterprise Technology">
    <title>Magnito Technologies - Technology Partners Who Deliver Tomorrow, Today</title>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon.png') }}">
    <script type="module" async
        src="https://static.rocket.new/rocket-web.js?_cfg=https%3A%2F%2Ftechsoluti9398back.builtwithrocket.new&_be=https%3A%2F%2Fappanalytics.rocket.new&_v=0.1.12">
    </script>
    <script type="module" defer src="https://static.rocket.new/rocket-shot.js?v=0.0.2"></script>
</head>

<body class="bg-background">
@include('layouts.header')
@yield('style')

@yield('content')

@include('layouts.footer')
@yield('script')

<script>
    document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
</script>
<script id="dhws-dataInjector" src="../public/dhws-data-injector.js"></script>
</body>

</html>