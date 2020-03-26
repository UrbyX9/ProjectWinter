<?php 
    $stmt = $pdo->prepare('SELECT * FROM countries');
    $stmt->execute();
    $country_list = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>