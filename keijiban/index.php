<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>掲示板</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

    <?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
        $stmt = $pdo->query("select * from keijiban");
    ?>

    <header>

        <div id="logo"><img src="diblog_logo.jpg" alt=""></div>

        <div id="menu-bar">

            <ul id="menu">
                <li>トップ</li>
                <li>プロフィール</li>
                <li>D.I.Blogについて</li>
                <li>登録フォーム</li>
                <li>お問い合わせ</li>
                <li>その他</li>
            </ul>

        </div>

    </header>

    <main>
        <div id="main-container">

            <div id="main-left">
                <div id="article">
                <h1>プログラミングに役立つ掲示板</h1>
                <form method="post"action="insert.php">
                <h2>入力フォーム（全て入力必須）</h2>
                    <div>
                        <label for="">ハンドルネーム</label><br>
                        <input type="text" id="text" name="hundlename" required>
                    </div>
                    <div>
                        <label for="">タイトル</label><br>
                        <input type="text" id="text" name="title" required>
                    </div>
                    <div>
                    <label>コメント</label><br>
                    <textarea columns="35" rows="7" name="comments" required></textarea>
                    </div>
                    <div>
                    <input type="submit" class="submit" value="投稿する">
                    </div>
                </form>

                <?php
                    while($row = $stmt ->fetch()){
                        echo "<div class='contents'>";
                        echo "<div class='contents-box'>";
                        echo "<h3>".$row['title']."</h3>";
                        echo "<div class='comments'>";
                        echo $row['comments'];
                        echo "<div class='hundlename'>posted by ".$row['hundlename']."</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                ?>
                </div>
            </div>

            <div id="main-right">
                <div id="side-menu">
                    <h3>人気の記事</h3>
                    <ul class="side-list">
                        <li>PHPオススメ本</li>
                        <li>PHP MyAdminの使い方</li>
                        <li>いま人気のエディタTopa</li>
                        <li>HTMLの基礎</li>
                    </ul>
                    <h3>オススメリンク</h3>
                    <ul class="side-list">
                        <li>D.I.Works株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Braketsのダウンロード</li>
                    </ul>
                    <h3>カテゴリ</h3>
                    <ul class="side-list">
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </main>

    <footer>
        <div id="copyright">Copyright&copy; D.I.works | D.I.Blog is the one which provides A to Z about programming</div>
    </footer>

    </body>

</html>