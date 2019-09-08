<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'App Laravel ERG')</title>
    
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script src="/js/app.js" defer></script>

</head>
<body>
   
     @include('partials/nav')
     @include('partials.session-status')
     @yield('contect')


  </body>
</html>