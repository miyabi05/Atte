<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
  <title>Atte</title>
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Atte
      </a>
    </div>
  </header>

  <form class="form" action="/users" method="post">
      @csrf
  <main>
    <div class="atte__content">
      <div class="atte__heading">
        <h3>ログイン</h3>
      </div>
    </div>
      <form class="form">
  <div class="form__content">
    <div class="form__input--text">
      <input type="email" name="email" placeholder="メールアドレス"style="width:300px;height:30px" />
    </div>
    <div class="form__input--text">
      <input type="password" name="password" placeholder="パスワード" style="width:300px;height:30px"/>
    </div>
    <div class="form__button">
      <button class="form__button-login" type="submit" style="width:300px;height:30px">ログイン</button>
    </div>
    <div class="form__register">
      <p>アカウントをお持ちでない方はこちらから</p>
      <a href="/register" onclick="js_alert()">会員登録</a>
  </div>
  </main>
  </form>

  <footer class="footer">
    <div class="footer__inner">
      <div class="footer__logo">
        Atte,inc.
      </div>
    </div>
</body>


</html>