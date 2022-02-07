# 簡易掲示板アプリ
画像・動画・コメント投稿可能な掲示板アプリ。

※動作確認に際してユーザIDやパスワードなどは表示されている

* [動作確認用URL](http://co-19-214.99sv-coco.com/kadai4_2/login-form.php)

## 画面キャプチャ
### 新規登録・ログイン画面
![image](https://user-images.githubusercontent.com/50240567/129445349-c1dfdaca-1ff2-44c4-9ea4-4c5e280125a9.png)

### 掲示板画面
![image](https://user-images.githubusercontent.com/50240567/129445382-0821491d-fa6d-48f0-be7f-77d288a7c1a3.png)

## 制作背景・目的
* 学校・会社・趣味仲間など、生活の上で、コミュニティに属する場面は多々あり、コミュニティの活性化において、オフラインだけでなく、オンライン上での議論や雑談、情報共有などが出来ると便利である。
* これを踏まえて、オンライン上でユーザ間での雑談や情報共有を目的としたwebアプリを作ること、加えて、Webアプリ制作の基礎を学ぶことを目的にで制作した。

## 機能
* **メール認証機能**
  * 新規登録時にメールアドレスを入力して仮登録(24時間以内に登録しないと自動破棄)。
  * メールアドレス宛にURLが送付されるのでクリック。
  * ユーザIDとパスワードを入力・確認して登録環境。
* **キャッシュ機能**
  * 一度ページを閉じてもブラウザを閉じなければ自動的にログインされる
* **画像/動画/コメントの投稿・削除・編集**
  * 自分の好きな内容を投稿可能！
* **レスポンシブデザイン(CSS)**
  * 開かれるデバイスの画面サイズに応じてレイアウトが自動変更される

## 使用言語・フレームワーク
* PHP
* MySQL
* 外部ライブラリ
  * [smarty3.1.36](https://github.com/smarty-php/smarty/releases/tag/v3.1.36)
  * [cache_lite](https://pear.php.net/package/Cache_Lite/download/1.8.3)
  * smartyとcache_liteは容量がそれほどないことから、手順簡略により予めリポジトリ上に配置しておく。


## 自己評価・感想
### 自己評価
* 完成度60%
* 機能的には想定していたものが実装できたが、UI面でフォームの枠の大きさがまちまちだったり、投稿をし続けると永遠に下部に追加され続けるので、ページネーションをつけたりと改善の余地は多くある。


## Windows環境での動作確認手順
### 環境
* Windows10
* XAMPP

### 手順
* [リンク](https://www.apachefriends.org/xampp-files/8.1.2/xampp-windows-x64-8.1.2-0-VS16-installer.exe)より、xamppインストーラをダウンロードし、全てdefaultの設定のままインストールを開始する。
  * ここで、インストール位置は私の環境でのデフォルト`C:\xampp`以下にインストールした。
* インストール後、`C:\xampp\php\php.ini`のsendmail_pathを以下のように修正する.
```C:\xampp\php\php.ini
sendmail_path ="\"C:\xampp\sendmail\sendmail.exe\" -t"
```

* また、`C:\xampp\sendmail\sendmail.ini`を以下のように修正する.なお、下3つは存在するメールアドレスとパスワードを指定する(登録確認メールの送信元メールアドレス)。

```C:\xampp\sendmail\sendmail.ini
smtp_server=smtp.gmail.com
smtp_port=587
auth_username=test@gmail.com
auth_password=password
force_sender=test@gmail.com
```

* 修正後、`C:\xampp\htdocs`以下に本リポジトリ`bulletin-board`を配置し、`C:\xampp\xampp-control`から、ApacheとMySQLを起動する。
* 起動後、この[URL](http://localhost/bulletin-board/bulletin-board/registration-form.php)にアクセスすると、アプリの同確認ができる。

## 参考文献
* 独習PHP 第3版, 山田 祥寛 , 翔泳社, 2016/4/9
* XAMPPのローカル環境からメールを送信できるように設定する方法【初心者向け】 | TechAcademyマガジン,https://techacademy.jp/magazine/4129,
2022/02/07
