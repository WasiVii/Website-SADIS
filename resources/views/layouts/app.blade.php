<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SADIS School | @yield('title')</title>
    @vite('resources/css/app.css')
</head>


<body>
    <x-header.home/>

    @yield('content')
    {{-- <div class="max-w-6xl mx-auto">
        @yield('content')
    </div> --}}
    <x-footer.home/>

</body>
</html>