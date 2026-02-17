<!DOCTYPE html>
<head>
    <meta name="description" content="Laravel page">
    <title>@yield('title', 'My Laravel App')</title>

    <link rel="stylesheet" href="{{ asset('app.css') }}">

</head>
<body>

<header>
    <h1>Laravel Website</h1>
</header>

<main>
    <div class="container">
        @yield('content')
    </div>
</main>

<footer>
    <p>Laravel App</p>
</footer>

</body>
</html>
