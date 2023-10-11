<!DOCTYPE html>
<html>

<head>
    <x-frontend.layouts.partial.heads />
    <title>Your Dream House</title>
</head>

<body>
    {{-- header section --}}
    <x-frontend.layouts.partial.header />


    {{ $slot }}

    {{-- info section --}}
    <x-frontend.layouts.partial.info />

    {{-- footer section --}}
    <x-frontend.layouts.partial.footer />


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>


</body>

</html>
