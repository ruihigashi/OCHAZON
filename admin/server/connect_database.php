<?php

function connectDatabase(){
        $pdo = new PDO(
            'mysql:host=mysql305.phy.lolipop.lan;
            dbname=LAA1553843-php2024;charset=utf8',
            'LAA1553843',
            'pass0421'
        );
    return $pdo; 
}

?>