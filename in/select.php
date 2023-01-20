<?php
//1.  DB接続します
try {
    $pdo = new PDO('mysql:dbname=gs_db_1224;charset=utf8;host=localhost','root','');
  } catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
  }




//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM 1224_table");
$status = $stmt->execute();



//３．データ表示
$view="";
if($status==false) {
 //execute（SQL実行時にエラーがある場合）
 $error = $stmt->errorInfo();
 exit("ErrorQuery:".$error[2]);

} else {
 //Selectデータの数だけ自動でループしてくれる
 while( $res = $stmt->fetch(PDO::FETCH_ASSOC)){
         $view .= '<li class="products-item">';
        $view .= '<p class="cart-thumb"><img src="../img/'.$res["fname"].'"
        width="240" height="120" style="border-radius: 5px;"></p>';
        $view .= '<h2 class="title">'.$res["title"].'</h2>';
        $view .= '<p class="content">'.$res["content"].'</p>';
        $view .= '<p class="uname">'.$res["uname"].'</p>';
        $view .= '<a href="detail.php?id='.$res["id"].'" class="btn-update">編集</a>';
        $view .= '<a href="delete.php?id='.$res["id"].'" class="btn-delete">削除</a>';
         $view .= '</li>';
 }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link href="../css/select.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/jquery.bxslider.css">
</head>
<body class="cms">
  
  <header>
    <div class="btnwrap">  
      <button class="lbtn" onclick="location.href='./login.php'">ログイン</button>
      <button class="tbtn" onclick="location.href='./register.php'">会員登録</button>
    </div>  
  </header>
    <div class="f-container">
        <div class="f-item">注目</div>
        <div class="f-item">メンバーシップ</div>
        <div class="f-item">買う</div>
        <div class="f-item">応募する</div>
        <div class="f-item">参加する</div>
        <div class="f-item">note活用術</div>
    </div>


  
    
    <div class="mmm">
    <div style="overflow-y: auto; border: 1px #999999 solid;">
      <nav class="left">
        <h2 class="l-t">やってみた</h2>
        <h2 class="l-t">特集</h2>

        <div class="krs">
          <h2 class="l-t" id="t1">くらし&nbsp;</h2>
          <!-- <button class="k-btn">P</button> -->
        </div>
          <h3 class="mt1">家庭</h3>
          <h3 class="mt1">フード</h3>
          <h3 class="mt1">ライフスタイル</h3>
          <h3 class="mt1">ショッピング</h3>
          <h3 class="mt1">育児</h3>
          <h3 class="mt1">健康</h3>
          <h3 class="mt1">旅行・おでかけ</h3>
          <h3 class="mt1">ペット</h3>
          <h3 class="mt1">コラム・エッセイ</h3>
          <h3 class="mt1">美容</h3>
          <h3 class="mt1">ファッション</h3>

        <h2 class="l-t">まなび</h2>
        <h3 class="mt2">教育</h3>
        <h3 class="mt2">読書</h3>
        <h3 class="mt2">デザイン</h3>
        <h3 class="mt2">人文学</h3>
        <h3 class="mt2">サイエンス</h3>

        <h2 class="l-t">しごと</h2>
        <h2 class="l-t">社会</h2>
        <h2 class="l-t">エンタメ</h2>
        <h2 class="l-t">テクノロジー</h2>
        <h2 class="l-t">カルチャー</h2>
      </nav>
    </div>

      <main class="wrapper-main">
        <h1 class="kyo">今日の注目記事</h1>
        <ul class="cart-list">
            <?= $view;?>
        </ul>
      </main>
      <aside></aside>
    </div>


<footer></footer>

<script src="http://code.jquery.com/jquery-3.0.0.js"></script>



<script>

fuction OC(oc1,oc2){
  $(function(){
    $(oc1).toggle();

    $(oc2).click(function() {
      $(oc1).toggle();
    });
  });
}

OC('.mt1','#t1');

$(function(){
  $(".mt1").toggle();

  $("#t1").click(function() {
		$(".mt1").toggle();
	});
});

</script>

</body>
</html>


