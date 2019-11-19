## テーブル定義
---
- ユーザーテーブル

| カラム論理名 | カラム物理名 | 型 |
|:----|:----|:----|
| ID | id | SERIAL |
| ユーザー名 | name | STRING |
| メールアドレス | email | STRING |
| パスワード | password | STRING |
| 作成日 | created_at | TIMESTAMP |
| 更新日 | updated_at | TIMESTAMP |

- ツイートテーブル

| カラム論理名 | カラム物理名 | 型 |
|:----|:----|:----|
| ID | id | SERIAL |
| ユーザーID | user_id | INTEGER |
| ツイート文 | text | STRING |
| 作成日 | created_at | TIMESTAMP |
| 更新日 | updated_at | TIMESTAMP |

- コメントテーブル

| カラム論理名 | カラム物理名 | 型 |
|:----|:----|:----|
| ID | id | SERIAL |
| ユーザーID | user_id | INTEGER |
| ツイートID | tweet_id | INTEGER |
| コメント文 | comment | STRING |
| 作成日 | created_at | TIMESTAMP |
| 更新日 | updated_at | TIMESTAMP |