<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'App Laravel ERG')</title>

    <style >
        .active a{
            color: royalblue;
            text-decoration:  none;

        }
    
    </style>
</head>
<body>
   
    @include('partials/nav')
   @yield('contect')


  </body>
</html>