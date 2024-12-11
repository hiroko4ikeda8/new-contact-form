@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
<link rel="stylesheet" href="{{ asset('css/index.css') /}}">
@endsection

@section('content')

<header class="header">
    <div class="header__inner">
        <div class="header-utilities">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
</header>

<body>
    <header>
        <h1>Admin</h1>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>名前</th>
                    <th>メールアドレス</th>
                    <th>登録日</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>山田 太郎</td>
                    <td>taro@example.com</td>
                    <td>2024-12-01</td>
                    <td>
                        <button class="edit-btn">編集</button>
                        <button class="delete-btn">削除</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>鈴木 花子</td>
                    <td>hanako@example.com</td>
                    <td>2024-12-02</td>
                    <td>
                        <button class="edit-btn">編集</button>
                        <button class="delete-btn">削除</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
    <footer>
        <p>© 2024 登録者管理システム</p>
    </footer>
</body>

</html>

@endsection