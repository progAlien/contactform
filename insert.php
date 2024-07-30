<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

$sql = "insert into contactform(name, mail, age, comments) values(?,?,?,?)";
$stnt = $pdo->prepare($sql);

$stnt->bindvalue(1,$_POST['name']);
$stnt->bindvalue(2,$_POST['mail']);
$stnt->bindvalue(3,$_POST['age']);
$stnt->bindvalue(4,$_POST['comments']);

$stnt->execute();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet"type="text/css"href="style2.css">
</head>
<body>

    <h1>お問合せフォーム</h1>
    
    <div class="confirm">
        <p>
        お問い合わせ有難うございました。<br>3営業日以内に担当者よりご連絡差し上げます。
        </p>
    </div>
    
</body>
</html>