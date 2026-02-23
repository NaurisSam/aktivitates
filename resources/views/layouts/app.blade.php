<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        * {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</head>
<body>

<header class="small">
        <div>

            @include('inc.header')
        </div>


    </header>

    <main style="padding-bottom: 100px" class="container">
        <section>
            @yield('content')
        </section>
    </main>

    <footer class="container" style="margin-top:1.25rem;">
        @include('inc.footer')
    </footer>
</body>
</html>