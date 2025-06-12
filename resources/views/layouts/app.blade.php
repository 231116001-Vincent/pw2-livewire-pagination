<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Pagination Tutorial')</title>

    @vite('resources/css/app.css')
</head>
<body class="flex flex-col items-center">
    <div class="w-[50%] mt-10 space-y-6">
        @yield('content')
    </div>
</body>
</html>