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
    <div class="header_center">
      <form method="get" action="飛ぶページ">
        <input name="search" type="text" class="search" placeholder="キーワードを入力"><input type="submit" value="検索">
      </form>
    </div>
    <div class="header_right">
        <a href="#cart" class="header"><img src="../images/cart.png" alt="カートアイコン" width="100" height="100"></a>
        <a href="#user" class="header"><img src="../images/user.png" alt="ユーザーアイコン" width="100" height="100"></a>
    </div>
  </div>

  <div class="detail_root"><!-- 商品の詳細 -->

  <?php
// データベース接続（PDO）
$pdo = new PDO(
    'mysql:host=mysql309.phy.lolipop.lan;
    dbname=LAA1553843-ochazon;charset=utf8',
    'LAA1553843',
    'pass0421'
);

if (isset($_POST['name'])) {
    $product_name = $_POST['name'];

    $sql = "SELECT * FROM productMg WHERE product_name = :product_name";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':product_name', $product_name, PDO::PARAM_STR);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);  // 1件の結果を連想配列として取得

    if ($result) {
        echo '<div class="detail_imgcontainer">';
        echo '  <input type="radio" name="detail_img" id="detail_img1" checked>';
        echo '  <input type="radio" name="detail_img" id="detail_img2">';
        echo '  <input type="radio" name="detail_img" id="detail_img3">';
        echo '  <input type="radio" name="detail_img" id="detail_img4">';
        echo '  <input type="radio" name="detail_img" id="detail_img5">';
        echo '  <div class="detail_btn">';
        echo '  <img src="' . htmlspecialchars($result['image'], ENT_QUOTES, 'UTF-8') . '" class="list_img" alt="商品画像">';
        echo '  </div>';
        echo '</div>';

        echo '<div class="detail_exnotes">';
        echo '  <div class="detail_title">' . htmlspecialchars($result['product_name']) . '</div><hr>';
        echo '  <div class="detail_price">';
        echo '      <div class="detail_money_mark">￥</div>';
        echo '      <div class="detail_money">' . number_format($result['price']) . '</div>';
        echo '      <div class="detail_tax">税込み(￥' . number_format($result['price'] / 10) . '/本)</div>';
        echo '  </div>';

        echo '  <div class="detail_buy">';
        echo '      <div class="vertical_measures">';
        echo '          <div class="quantity">数量：';
        echo '              <select name="quantity">';
        echo '                  <option value="1">1</option>';
        echo '                  <option value="2">2</option>';
        echo '                  <option value="3">3</option>';
        echo '                  <option value="4">4</option>';
        echo '                  <option value="5">5</option>';
        echo '                  <option value="6">6</option>';
        echo '                  <option value="7">7</option>';
        echo '                  <option value="8">8</option>';
        echo '                  <option value="9">9</option>';
        echo '              </select>';
        echo '          </div>';
        echo '        <input type="submit" value="カートに入れる" class="detail_cartin"><br>';
        echo '        <input type="submit" value="いますぐ購入" class="detail_buynow"><br>';
        echo '      </div>';
        echo '  </div>';
        echo '      <div class="detail_money">' . number_format($result['product_overview']) . '</div>';
        echo '      <div class="detail_money">' . number_format($result['category']) . '</div>';
        echo '      <div class="detail_money">' . number_format($result['size']) . '</div>';
        echo '      <div class="detail_money">' . number_format($result['business_name']) . '</div>';
        echo '      <div class="detail_money">' . number_format($result['storage']) . '</div>';
        echo '</div>';
    } else {
        echo '<p>指定された商品は見つかりませんでした。</p>';
    }
} else {
    echo '<p>商品名が指定されていません。</p>';
}
?>

</body>