<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS --}}
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/bulma.css">
    <title>Subscription App</title>
</head>

<body>
    {{-- Header --}}
    <div id="site-header">
        @include('partials.header')
    </div>

    {{-- Main --}}
    <div id="site-main">
        @yield('content')
    </div>

    {{-- Footer --}}
    <div id="site-footer">
        @include('partials.footer')
    </div>
    {{-- Javascript --}}
    <script src="js/all.js"></script>
</body>

</html>