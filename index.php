<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>php課題</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
  </head>

  <body>
    <h3 class="header">じゃんけん！</h3>
    <p id="startimg"><img src="img/じゃんけんstart.png" alt=""></p>
    <div id="match">
      <div id="select">
        <p class="guide">出す手を選択してね</p>
        <ul>
          <li><img src="img/グー.png" alt="" class="gu"></li>
          <li><img src="img/チョキ.png" alt="" class="tyo"></li>
          <li><img src="img/パー.png" alt="" class="pa"></li>
        </ul>
      </div>
      <div id="opponent">
        <?php
      // php のコードを記述
      $random = mt_rand(1,3);
      $janken = $random;
      if($janken == 1){
        echo '<p><img src="img/グー.png" alt="" ></p>';
        echo '<p>相手の手:グー</p>';
      } elseif($janken == 2){
        echo '<p><img src="img/チョキ.png" alt="" ></p>';
        echo '<p>相手の手:チョキ</p>';
      } else {
        echo '<p><img src="img/パー.png" alt=""></p>';
        echo '<p>相手の手:パー</p>';
      }
      ?>
    </div>
  </div>
    <p id="start">勝負する</p>
    <p id="restart">再勝負！</p>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- js -->
    <script src='js/app.js'></script>
  </body>
</html>
