<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アンケートフォーム</title>
</head>

<body>
  <h2>アンケート</h2>

  <form action="data_csv_create.php" method="POST">
    <fieldset>
      <legend>アンケート入力画面</legend>
      <a href="data_csv_read.php">一覧画面</a>
      <div>
        名前:<br /><input type="text" name="name" size="50" value=""><br />
      </div>
      <div>
        E-mail:<br /> <input type="text" name="mail" size="50" value=""><br />
      </div>
     
      <div>
        サイトへのご意見:<br />
        <textarea rows="8" cols="47" id="memo" name="memo"></textarea><br />
      </div>

      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>



</body>

</html>