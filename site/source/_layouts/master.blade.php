<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>{{ $page->title }}</title>

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/modern-normalize/0.5.0/modern-normalize.min.css">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body>
        @include('_partials/nav')

        <div class="container">
            @yield('body')
        </div>
    </body>
</html>
