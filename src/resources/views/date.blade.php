<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/date.css') }}" />
  <title>Document</title>
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
  
  <main>
    <div class=calender>
      <input type="date"></input>
    </div>
    
    <div class=table>
      <tr>
        <td>名前</td>
        <td>勤務開始</td>
        <td>勤務終了</td>
        <td>休憩時間</td>
        <td>勤務時間</td>
      </tr>
    </div>
  </main>

  <footer class="footer">
    <div class="footer__inner">
      <div class="footer__logo">
        Atte,inc.
      </div>
    </div>
</body>
</html>