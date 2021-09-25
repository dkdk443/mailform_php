<?php
  $category = htmlspecialchars($_POST['category']);
  $email = htmlspecialchars($_POST['email']);
  $content = htmlspecialchars($_POST['content']);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
  <title>Document</title>
</head>
<body>
  <header>
    logo
  </header>
  <div class="container form_container">
    <h1>お問い合わせフォーム</h1>
    <div class="steps">
      <li class="step">①フォーム入力</li>
      <li class="step">②入力内容確認</li>
      <li class="step">③お問い合わせ完了</li>
    </div>
    <p>以下の内容で送信しますが、よろしいですか？</p>
    <div class="inq_table">
      <div class="inq_table_row"><div class="inq_title">カテゴリ</div><div class="inq_content"><?= $category ?></div></div>
      <div class="inq_table_row"><div class="inq_title">メールアドレス</div><div class="inq_content"><?= $email ?></div></div>
      <div class="inq_table_row"><div class="inq_title">お問い合わせ内容</div><div  class="inq_content"><p><?= $content ?></p></div></div>
    </div>
      <form class="hidden_form" method="POST" action="./thankyou.php">
        <input type="hidden" name="category" value="<?= $category ?>">
        <input type="hidden" name="email" value="<?= $email ?>">
        <input type="hidden" name="content" value="<?= $content ?>">
        <button type="submit" class="btn btn-primary">送信する</button>
      </form>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>