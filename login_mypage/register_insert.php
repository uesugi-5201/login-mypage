<?php
mb_internal_encoding('utf8');

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
$stmt = $pdo->prepare("insert into login_mypage(name,mail,password,picture,comments)values(?,?,?,?,?)");

//bindValueメソッドでパラメーターをセット
$stmt->bindValue(1,$_POST['name']);
$stmt->bindValue(2,$_POST['mail']);
$stmt->bindValue(3,$_POST['password']);
$stmt->bindValue(4,$_POST['path_filename']);
$stmt->bindValue(5,$_POST['comments']);

//executeでクエリを実行
$stmt->execute();
$pdo = NULL;

header('Location:after_register.html');
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="after_register.css">
    </head>
    
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="login.php">ログイン</a></div>
        </header>
            <div class="kanryou">
            <h3>登録ありがとうございました。</h3>
            <br>
            <a href="register.php"> 新規登録画面へ戻る</a>
            </div>
        <footer>
            ©2018 InterNous.inc All rights reserved
        </footer>
    </body>
</html>