<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.css">
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')

    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script>
        @yield('script')
    </script>
</body>
</html>