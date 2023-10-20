<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- llamando la libreria tailwind css -->
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <!-- favicom -->
    <!-- estilos -->
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Header-->
    <!-- nav -->
    @include('layouts.partials.header')


    @yield('content')

    <!-- footer -->
    @include('layouts.partials.footer')

    
    <!-- script -->
</body>
</html>