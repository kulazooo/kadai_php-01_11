
// POSTを受け取る
// POSTの場合はパスワードも送ってみる。

<?php
var_dump($_POST);
$name=$_POST['name'];
$mail=$_POST['mail'];
$home=$_POST['home'];
// $sex1=$_POST['sex1'];
// $sex2=$_POST['sex2'];
// $ex1=$_POST['ex1'];
// $ex2=$_POST['ex2'];

$name = htmlspecialchars($name, ENT_QUOTES);
$mail = htmlspecialchars($mail, ENT_QUOTES);
$home = htmlspecialchars($home, ENT_QUOTES);
// $sex1 = htmlspecialchars($sex1, ENT_QUOTES);
// $sex2 = htmlspecialchars($sex2, ENT_QUOTES);
// $ex1 = htmlspecialchars($ex1, ENT_QUOTES);
// $ex2 = htmlspecialchars($ex2, ENT_QUOTES);



// ファイルに書き込み

$date = date('Y/m/d H:i:s');
$str = $date . $name . $home;

// ファイルの用意
$file = fopen('./data/data.txt','a');

// 書き込み
fwrite($file, $date . "\n");
fwrite($file, $str . "\n");

// ファイルをクローズ
fclose($file);
?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
