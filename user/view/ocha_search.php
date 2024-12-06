<?php
session_start();
require_once '../server/connect_database.php';

try {
  $pdo = connectDatabase();
} catch (PDOException $e) {
  echo 'データベース接続エラー: ' . htmlspecialchars($e->getMessage());
  exit;
}

$sql = null;
$params = [];
$results = null;

// 検索処理
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $sql = $pdo->prepare('SELECT * FROM productMg WHERE product_name LIKE ?');
    $params[] = '%' . $_GET['search'] . '%';

    $sql->execute($params);
    $results = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OCHAZON</title>
  <link rel="stylesheet" href="../style/style.css">
</head>

<body>
  <div class="header_root">
    <div class="header_left">
      <a href="./home.html" class="header"><img src="../images/rogo.png" alt="ホームアイコン" width="200px"></a>
    </div>
    <div class="header_right">
      <a href="#cart" class="header"><img src="../images/cart.png" alt="カートアイコン" width="100" height="100"></a>
      <a href="#user" class="header"><img src="../images/user.png" alt="ユーザーアイコン" width="100"
          height="100"></a>
    </div>
  </div>


  <div class="ocha_page"><!--↓↓ヘッダーより下↓↓-->

    <div class="ocha_vertical"><!--縦-->

      <div class="ocha_pagetop"><!--お茶の説明-->

        <div class="top_sentence"><!--サンプル以外-->
          <div class="ocha_introduction"><!--説明文章-->
            <div class="ocha_pagetitle">玉露</div>
            <hr class="ocha_line">
            <!-- 解説↓ -->
            <div class="ocha_explanation">
              高級茶として有名な「玉露」は緑茶の一種で、一番茶の新芽が伸び出した頃から茶畑を20日前後覆い、遮光率70%〜90%で日光を遮った茶畑から摘採した茶葉を蒸熱、揉捻、乾燥させて製造したお茶のこと
            </div>
          </div><!--説明文章-->
        </div><!--サンプル以外-->
        <div class="ocha_sample"><!--トップのサンプル-->
          <img src="../images/gyokuro.jpg">
          <img src="../images/gyokuro.jpg">
          <img src="../images/gyokuro.jpg">
        </div><!--トップのサンプル-->

      </div><!--お茶の説明-->

      <div class="ranking">
        <div class="ranking_title">ランキング</div>
        <div class="ranking_img">
          <?php
          $pdo = new PDO(
            'mysql:host=mysql309.phy.lolipop.lan;
            dbname=LAA1553843-ochazon;charset=utf8',
            'LAA1553843',
            'pass0421'
          );

          $sql = "SELECT image, product_name FROM productMg ORDER BY price LIMIT 3";
          $result = $pdo->query($sql);
          $rankingData = $result->fetchAll(PDO::FETCH_ASSOC);

          $rankingCount = count($rankingData);
          if ($rankingCount > 0) {
            foreach ($rankingData as $rank) {
              echo '<div class="ranking_element">';
              echo '<form action="detail.php" method="POST">';
              echo '<input type="hidden" name="name" value="' . htmlspecialchars($rank["product_name"], ENT_QUOTES, 'UTF-8') . '">';
              echo '<button type="submit" class="img-transition1">';
              echo '<img src="' . htmlspecialchars($rank['image'], ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($rank['product_name'], ENT_QUOTES, 'UTF-8') . '">';
              echo '</button>';
              echo '<p class="ranking_text">' . htmlspecialchars($rank['product_name'], ENT_QUOTES, 'UTF-8') . '</p>';
              echo '</form>';
              echo '</div>';
            }
          } else {
            echo '<p>ランキング情報がありません。</p>';
          }
          ?>
        </div>
      </div>

      <div class="ocha_list">
        <?php
          echo '<div class="line">';
          $count = 0;

          foreach ($results as $item) {
            echo '<div class="list_commodity">';
            echo '<form action="detail.php" method="POST">';
            echo '<input type="hidden" name="name" value="' . htmlspecialchars($item["product_name"], ENT_QUOTES, 'UTF-8') . '">';
            echo '<button type="submit" class="img-transition">';
            echo '<img src="' . htmlspecialchars($item['image'], ENT_QUOTES, 'UTF-8') . ' alt="商品画像" class="gyokuro">';
            echo  htmlspecialchars($item['product_name'], ENT_QUOTES, 'UTF-8');
            echo '<p class="list_price">価格: ¥' . htmlspecialchars($item['price'], ENT_QUOTES, 'UTF-8') . '</p>';
            echo '</button>';
            echo '<a href="./cart_in.html"><p class="list_cartbtn">カートに入れる</p></a>';
            echo '</form>';
            echo '</div>';

            // 5つごとに新しい行を作成
            if ($count % 5 == 0 && $count !== $teaCount) {
              echo '</div><div class="line">'; // 現在の行を閉じて新しい行を開く
            }
          }
          echo '</div>'; // 最後の行を閉じる
        ?>
      </div>