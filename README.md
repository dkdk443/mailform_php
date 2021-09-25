# 環境

- bootstrap@5.0.0-beta1
- PHP 7.3.11
- mysql Ver 8.0.15 for osx10.14 on x86_64 (Homebrew)

# 機能

- 問い合わせ入力
- 問い合わせ確認
- バリデーション
- メール送信
- LINE 送信（できれば）
- Slack 送信（できれば）

# データベース設計

## inquiries テーブル

| カラム名 | 型     | PK  | not null |
| -------- | ------ | --- | -------- |
| id       | 数値   | ○   | ○        |
| category | 文字列 |     | ○        |
| email    | 文字列 |     | ○        |
| content  | 文字列 |     | ○        |

```
CREATE TABLE inquiries (id int NOT NULL PRIMARY KEY, category varchar(20) NOT NULL, email varchar(50) NOT NULL,
content varchar(200) NOT NULL);
```
