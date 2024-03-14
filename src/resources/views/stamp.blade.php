<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/stamp.css') }}" />
  <title>Atte</title>
</head>
<body>
<header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">Atte</a>

        <ul>
          <li>ホーム</li>
          <li>日付一覧</li>
          <li>ログアウト</li>
        </ul>
    </div>
  </header>
  
  <form class="form" action="/stamps" method="post">
  <main>
    <div class=greeting>
    {{--<p>ようこそ、{{ Auth::user()->name }}さん</p>--}}
    </div>
    <div class="button">
      <input type="button" name="start" value="勤務開始"style="width:300px;height:100px;"/>
      <input type="button" name="end" value="勤務終了"style="width:300px;height:100px;"/><br></br>
      <input type="button" name="break" value="休憩開始"style="width:300px;height:100px;"/>
      <input type="button" name="break_end" value="休憩終了"style="width:300px;height:100px;"/>
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