

<!DOCTYPE html>
<html lang="en">
<head>
@vite('resources/js/app.js')
@vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bloggy</title>
</head>
<body class="bg-gray-200">

    <nav class="flex p-6 bg-slate-800 text-white text-lg font-medium justify-between mb-8">
        <div class="flex gap-8">
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('dashboard')}}">Dashboard</a>
            <a href="">Posts</a>
        </div>

        <div class="flex gap-8">
            <p>hollayemie@bloggy</p>
            <a href="">Login</a>
            <a href="{{ route('register')}}">Register</a>
            <a href="">Logout</a>
        </div>

    </nav>

    @yield('content')
</body>
</html>
