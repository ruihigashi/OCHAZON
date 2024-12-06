<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Confirmation</title>
    <link rel="stylesheet" href="../style/4loginok.css">
</head>

<body>

    <div class="container">
        <div class="header">
            <p>OCHAZON</p>
        </div>
        <div class="confirmation-message">
            <p><?= $_GET['username'] ?>でログインしました</p>
        </div>
        <div class="footer">
            <p>©OCHAZON</p>
        </div>
    </div>

    <div class="purchase">
        <form action="hilogin.php">
            <input type="submit" value="注文手続きへ進む" id="go_purchase"></button>
        </form>
    </div>



</body>

</html>