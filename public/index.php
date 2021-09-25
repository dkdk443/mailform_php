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
  <div class="container">
    <h1>お問い合わせフォーム</h1>
    <form>
      <div class="mb-3">
        <label for="category" class="form-label">カテゴリ<span class="required">必須</span></label>
        <select class="form-select" aria-label="Default select example">
          <option value="サービスについて" selected>サービスについて</option>
          <option value="取材について">取材について</option>
          <option value="採用について">採用について</option>
          <option value="運営会社について">運営会社について</option>
        </select>
      </div>
       <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">メールアドレス<span class="required">必須</span></label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">お問い合わせ内容<span class="required">必須</span></label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">確認画面へ</button>
    </form>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>