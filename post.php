<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
    <title>POST練習</title>
</head>

<body>
    <div class="menu">
        <h3>menu</h3>
        <ul>
            <li>サンプルフォームに必要な情報を入れる(POST)</li>
            <li>(演習)password欄を作って受け取る。</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>
    <P>※post_confirm.phpにpostで送ってください。</P>

    <form action="write.php" method="post">
        お名前: <input type="text" name="name">
        メール: <input type="text" name="mail">
        出身: <input type="text" name="home">
        <!-- 性別: <input type="radio" name="sex" value="men" checked="checked">男
            <input type="radio" name="sex" value="women">女
        プログラム経験: <input type="radio" name="ex" value="yes" checked="checked">有り
                    <input type="radio" name="ex" value="no">無し -->

        <!-- パスワード欄を追加してみる。 -->
        <input type="submit" value="送信">
    </form>
    <!-- <script>alert('test');</script> -->
</body>

</html>
