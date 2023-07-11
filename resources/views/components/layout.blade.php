<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>    
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    
    <x-navbar/>
    @if(session('message'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{session('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    {{$slot}}
    
    <x-footer/>
    @livewireScripts
</body>
</html>