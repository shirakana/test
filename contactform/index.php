<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>お問い合わせフォーム</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <h1>お問い合わせフォーム（全て入力必須）</h1>
        <form method="post"action="confirm.php">
            <div>
                <label for="">名前</label><br>
                <input type="text" id="text" name="name" value="<?php if (!empty($_POST['name'])) {echo $_POST['name'];}?>" required>
            </div>
            <div>
                <label for="">メールアドレス</label><br>
                <input type="text" id="text" name="mail" value="<?php if (!empty($_POST['mail'])) {echo $_POST['mail'];}?>" required>
            </div>
            <div>
                <label for="">年齢</label><br>
                <select name="age" id="dropdown" required>
                <?php if (!empty($_POST['age'])) {echo '<option value="'.$_POST['age']. '" hidden selected>'.$_POST['age'].'</option>';}?>
                <option value="" hidden>選択してください</option>
                <script>
                    for (var i = 18; i <= 65; i++){
                            document.write("<option>" + i + "歳</option>");
                    }

                </script>
                </select>
            </div>
            <div>
            <label>コメント</label><br>
            <textarea columns="35" rows="7" name="comments" required><?php if (!empty($_POST['comments'])) {echo $_POST['comments'];}?></textarea>
            </div>
            <div>
            <input type="submit" class="submit" value="送信する">
            </div>
        </form>
    </body>

</html>