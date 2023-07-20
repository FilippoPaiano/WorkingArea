<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Games Blog</title>
</head>
<body>
    
    <x-navbar />
    @if (session('unauthorized'))
        <div class="alert alert-danger">
            {{session('unauthorized')}}
        </div>
    @endif
    
    <x-header />
    <div class="min-vh-100">
        {{$slot}}
    </div>
    
    <x-footer />

</body>
</html>