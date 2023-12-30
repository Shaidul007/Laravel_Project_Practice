<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Photo Gallery App</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
    
{{-- content --}}

@yield('content')

@include('Frontend.components.nav')




    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>