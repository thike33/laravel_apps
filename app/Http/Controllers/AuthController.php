<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // ログインページ
    public function LoginForm()
    {
        return view('login');
    }

    // ログイン機能
    public function login(AuthRequest $request)
    {
        $credentials = $request->validated();

        // Auth::attemptメソッドでログイン情報が正しいか検証
        if (Auth::attempt($credentials)) {
            // セッションを再生成する処理(セキュリティ対策)
            $request->session()->regenerate();
            // 未ログイン時にアクセスしたページへリダイレクト
            return redirect()->intended('/')->with('success', 'ログインしました');
        }

        // ログイン情報が正しくない場合のみ実行される処理
        // その際にwithErrorsを使ってエラーメッセージで手動で指定する
        // リダイレクト後のビュー内でold関数によって直前の入力内容を取得出来る項目をonlyInputで指定する
        return back()->withErrors([
            'email' => 'メールアドレスまたはパスワードが正しくありません',
        ])->onlyInput('email');
    }

    // ログアウト機能
    public function logout(Request $request)
    {
        // ログアウト処理
        Auth::logout();
        // セッションを無効化
        $request->session()->invalidate();
        // CSRFトークンを再生成
        $request->session()->regenerateToken();
        return to_route('top')->with('success', 'ログアウトしました');
    }
}

