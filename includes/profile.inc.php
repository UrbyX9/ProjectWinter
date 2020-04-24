<?php
    $pdo = pdo_connect_mysql();
    $stmt = $pdo->prepare('SELECT id, country FROM countries')->execute();
    $countries = $stmt->fetch(PDO::FETCH_ASSOC);
    
    foreach($countries as $country){
        echo '<option value="'.$country['id'].'">'.$country['country'].'</option>';
    }
?>