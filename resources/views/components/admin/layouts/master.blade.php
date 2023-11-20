<!DOCTYPE html>
<html>

<head>
    <x-admin.layouts.partial.heads />
    <title>Your Dream House</title>
</head>

<body>
    {{-- header section --}}
    <x-admin.layouts.partial.header />
    <br><br>

    {{ $slot }}

    {{-- info section --}}
    {{-- <x-frontend.layouts.partial.info /> --}}

    {{-- footer section --}}
    <x-admin.layouts.partial.footer />


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>


</body>

</html>
