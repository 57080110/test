<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>textファイル書き込み型todoリスト（入力画面）</title>
</head>

<body>
  <form action="todo_txt_create.php" method="POST">
    <fieldset>
      <legend>textファイル書き込み型todoリスト（入力画面）</legend>
      <a href="todo_txt_read.php">一覧画面</a>
      <div>
        名前:<br /><input type="text" name="name" size="50" value=""><br />
      </div>
      <div>
        E-mail:<br /> <input type="text" name="mail" size="50" value=""><br />
      </div>
      <div>
        趣味はなんですか:<br /> <input type="text" name="hobby" size="50" value=""><br />
      </div>

      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>