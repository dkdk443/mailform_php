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
    <form action="./confirm.php" method="POST" class="inq_form">
      <div class="mb-3">
        <label for="category" class="form-label">カテゴリ<span class="required">必須</span></label>
        <select class="form-select" aria-label="Default select example" name="category">
          <option value="サービスについて" selected>サービスについて</option>
          <option value="取材について">取材について</option>
          <option value="採用について">採用について</option>
          <option value="運営会社について">運営会社について</option>
        </select>
      </div>
       <div class="mb-3">
        <label for="email" class="form-label">メールアドレス<span class="required">必須</span></label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="content" class="form-label">お問い合わせ内容<span class="required">必須</span></label>
        <textarea class="form-control" id="content" rows="3" name="content"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">確認画面へ</button>
    </form>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>