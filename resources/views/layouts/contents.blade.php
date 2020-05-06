<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>@yield('title')</title>
    @yield('head')
</head>

<body>

    <header>
        <div class="header_inner">
            <div class="header_title">
                <a href="/top">
                    <h1>collegeMart</h1>
                </a>
            </div>
            <form method="form" action="/items/find" class="search_container">
                <input type="text" id="search_text" name="search_text" placeholder="">
                <input type="submit" value="検索" id="search_icon">
                <div class="clear_fix"></div>
            </form>
            <div class="clear_fix"></div>
            <nav>
                <ul id="header_account">
                    <li id="new_account"><a href="/select_register">新規作成</a></li>
                    <li id="login"><a href="/login_form">ログイン</a></li>
                    <div class="clear_fix"></div>
                </ul>
            </nav>
        </div>
        @yield('header')
    </header>

    <main>
        <div class="wrapper">
        </div>
        @yield('main')

    </main>
    <footer>
        @yield('footer')
    </footer>

</body>

</html>