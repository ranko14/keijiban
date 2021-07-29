<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>4eachblog 掲示板</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>  
  <div class="logo"><img src="4eachblog_logo.jpg"></div>
  <header>
    <div class="topmenu">
      <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
      </ul>
    </div>
  </header>

  <main>
    <div class="rightbox">
    
      <h1>プログラミングに役立つ掲示板</h1>

      <form method="post" action="insert.php">
        <h2>入力フォーム</h2>

        <div>
          <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" name="handlename">
        </div>

        <div>
          <label>タイトル</label>
            <br>
            <input type="text" class="text" name="title">
        </div>

        <div>
          <label>コメント</label>
            <br>
            <textarea cols="40" row="5" name="comments"></textarea>
        </div>

        <div>
          <input type="submit" class="submit" value="投稿する">
        </div>

      </form>
    </div>

    <div class="leftbox">
    <h2>人気の記事</h2>
        <ul>
          <li>PHPオススメ本</li>
            <li>PHP MYAdminの使い方</li>
            <li>今人気のエディタ Top5</li>
            <li>HTMLの基礎</li>
          </ul>
      <h2>オススメリンク</h2>
          <ul>
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Bracketsのダウンロード</li>
          </ul>
      <h2>カテゴリ</h2>
          <ul>
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
          </ul>
    </div>



  </main>
  <footer>copyright © internous|4each blog is the one which provides A to Z about programming.</footer>


  
</body>
</html>