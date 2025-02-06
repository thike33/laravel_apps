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
        <a href="{{ route('top') }}" class="font-bold text-3xl">Laravelアプリ</a>
    </div>
    <nav>
        <ul class="flex items-center gap-5">
            <li>
                <a href="">ブログ</a>
            </li>
            <li>
                <a href="{{ route('users.create') }}">新規登録</a>
            </li>
        </ul>
    </nav>
</header>

<main class="flex-grow">
    @if(session()->has('success'))
        <p class="bg-green-200 p-2">{{ session()->get('success') }}</p>
    @endif
    @yield('content')
</main>

<footer class="bg-gray-100 p-4">
    <ul class="max-w-5xl ml-auto">
        <li>
            <a href="{{ route('top') }}" class="underline">トップ</a>
        </li>
    </ul>
</footer>
</body>
</html>
