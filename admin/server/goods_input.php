<?php
    include_once 'connect_database.php';

    function Input($category, $price, $product_number, $product_name, $product_overview, $size, $name, $ingredients, $origin, $expiration_date, $storage, $manufacturer, $business_name, $contact, $business_hours, $holiday, $image, $date) {

        try{

            $pdo = connectDatabase();

            $sql = $pdo->prepare('INSERT INTO productMg(category, price, product_id, product_name, product_overview, size, name, ingredients, origin, expiration_date, storage, manufacturer, business_name, contact, business_hours, holiday, image, date) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
            $sql->execute([$category, $price, $product_number, $product_name, $product_overview, $size, $name, $ingredients, $origin, $expiration_date, $storage, $manufacturer, $business_name, $contact, $business_hours, $holiday, $image, $date]);

            $result = $sql->fetch(PDO::FETCH_ASSOC);

            if($result){
                header("Location: goods_management.php");
                echo '登録に成功しました<br>';
            }else{
                header("Location: goods_registration.php");
                echo '登録に失敗しました<br>';
            }

        } catch (PDOException $e){
            exit('登録エラー' . $e->getMessage());
        }

    }
?>
