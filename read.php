<?php
// ファイルを開く
$file = fopen('./data/data.txt', 'r');

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($file)) {
  list($date,$name,$mail,$home) = explode("\n",$str);
  echo "<tr>\n";
  echo "<td>$date</td><td>$name</td><td>$mail</td><td>$home</td>\n";
  echo "</tr>\n";
}

// ファイルを閉じる
fclose($file);



// //$htmlを初期化
// $html = array();
// //戻りの場合
// if(isset($_GET['back'])){
//     //htmlentities()でHTMLコードをエスケープ
//     $html['name'] =               htmlentities($_GET['name'], ENT_QUOTES, 'UTF-8');
//     $html['mail']['home'] =    htmlentities($_GET['mail']['home'], ENT_QUOTES, 'UTF-8');
    
// //初期値
// }else{
//     //初期化
//     $html['name'] =               '';
//     $html['mail']['home'] =    '';

// }
?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
    <style>
    body {
        font-family: "Open Sans", sans-serif;
        line-height: 1.25;
      }
      
      table {
        border-collapse: collapse;
        margin: 0 auto;
        padding: 0;
        width: 650px;
        table-layout: fixed;
      }
      
      table tr {
        background-color: #e6f2f5;
        padding: .35em;
        border-bottom: 2px solid #fff;
      }
      table th,
      table td {
        padding: 1em 10px 1em 1em;
        border-right: 2px solid #fff;
      }
      table th {
        font-size: .85em;
      }
      table thead tr{
        background-color: #167F92;
        color:#fff;
      }
      table tbody th {
          background: #78bbc7;
          color: #fff;
      }
      .txt{
         text-align: left;
         font-size: .85em;
      }
      .price{
        text-align: right;
        color: #167F92;
        font-weight: bold;
      }
      .non{
        background:#fff
      }
      @media screen and (max-width: 600px) {
        table {
          border: 0;
          width:100%
        }
        table th{
          background-color: #167F92;
          display: block;
          border-right: none;
        }
        table thead {
          border: none;
          clip: rect(0 0 0 0);
          height: 1px;
          margin: -1px;
          overflow: hidden;
          padding: 0;
          position: absolute;
          width: 1px;
        }
        table tr {
          display: block;
          margin-bottom: .625em;
        }
        table td {
          border-bottom: 1px solid #bbb;
          display: block;
          font-size: .8em;
          text-align: right;
          position: relative;
          padding: .625em .625em .625em 4em;
          border-right: none;
        }
        
        table td::before {
          content: attr(data-label);
          font-weight: bold;
          position: absolute;
          left: 10px;
          color: #167F92;
        }
        table td:last-child {
          border-bottom: 0;
        }
        table tbody th {
          color: #fff;
      }
      }
      </style>
</head>

<body>
<table>

            <tr>
                <td class="price"><?php echo $name; ?></td>
                <td><?php echo $mail; ?></td>
                <td><?php echo $home; ?></td>
            </tr>

    </table>   
    </body>

    </html>

