<?php
function country(){
    include_once('./dbh.inc.php');
    $pdo = pdo_connect_mysql();

    $stmt = $pdo->prepare('SELECT * FROM countries');
    $stmt->execute();
    
    $countries = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $countries;
}


?>