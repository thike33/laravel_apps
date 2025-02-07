@extends('layouts.default')

@section('content')
    <div class="py-10">
        <h1 class="text-center text-3xl font-bold">トップ</h1>
    </div>

    @auth
        <p>ログイン中です</p>
    @endauth
@endsection
