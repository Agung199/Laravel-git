<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css only -->
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- javascript -->
    <script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <title>@yield('title')</title>
    <style>
        .blog{
            padding: 5px;
            border: 1px solid lightgrey;
        }
        small{
            color: grey;
        }
    </style>
</head>
<body>
    @include ('layouts.app.header')
    <div class="container">
    @yield('content')

    </div>
    <div class="container">
        @include ('layouts.app.footer')
    </div>
</body>
</html>