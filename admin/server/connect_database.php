<?php

function connectDatabase(){
        $pdo = new PDO(
            'mysql:host=mysql309.phy.lolipop.lan;
            dbname=LAA1553843-ochazon;charset=utf8',
            'LAA1553843',
            'pass0421'
        );
    return $pdo;
}

?>