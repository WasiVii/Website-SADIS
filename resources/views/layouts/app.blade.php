<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SADIS School | @yield('title')</title>
    @vite('resources/css/app.css')
     <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>

</head>


<body>
    <x-header.home/>

    <div class="container">
        @yield('content')
    </div>
    {{-- <div class="max-w-6xl mx-auto">
        @yield('content')
    </div> --}}
    <x-footer.home/>

</body>
@stack('scripts')
</html>
