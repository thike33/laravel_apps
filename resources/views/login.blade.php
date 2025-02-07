@extends('layouts.default')

@section('content')
    <div class="p-10">
        <h1 class="text-center text-3xl font-bold">ログイン</h1>
    </div>

    <div class="mx-auto max-w-xl w-full">
        <form action="{{ route('login') }}" method="post" class="grid grid-cols-1 gap-5">
            @csrf

            <div class="grid grid-cols-1 gap-2">
                @if($errors->has('email'))
                    <p class="text-red-400">{{ $errors->first('email') }}</p>
                @endif
                <label for="name">メールアドレス</label>
                <input type="email" name="email" id="email" class="border" value="{{ old('email') }}">
            </div>

            <div class="grid grid-cols-1 gap-2">
                @if($errors->has('password'))
                    <p class="text-red-400">{{ $errors->first('password') }}</p>
                @endif
                <label for="name">パスワード</label>
                <input type="password" name="password" id="password" class="border">
            </div>

            <div class="text-center">
                <button type="submit" class="inline-block rounded p-1 bg-blue-600 text-white font-bold">ログイン</button>
            </div>
        </form>
    </div>
@endsection
