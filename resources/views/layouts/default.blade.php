<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravelアプリテスト</title>
    @vite('resources/css/app.css')
</head>
<body class="flex flex-col min-h-screen">
<header class="flex justify-between items-center p-5 border-b">
    <div class="">
        <a href="" class="font-bold text-3xl">Laravelアプリ</a>
    </div>
    <nav>
        <ul>
            <li>
                <a href="">ブログ</a>
            </li>
        </ul>
    </nav>
</header>

<main class="flex-grow">
    @yield('content')
</main>

<footer class="bg-gray-100 p-4">
    <ul class="max-w-5xl ml-auto ">
        <li>
            <a href="{{ route('top') }}" class="underline">トップ</a>
        </li>
    </ul>
</footer>
</body>
</html>
