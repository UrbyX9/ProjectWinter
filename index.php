<?php
   session_start();
    //function include / connect to DB
    include './functions.php';
    //connect to database
    $pdo = pdo_connect_mysql();

    //default home.php is set for visitors
    $page = isset($_GET['page']) && file_exists($_GET['page']. '.php') ? $_GET['page'] : 'home';
    //include and show requested page
    include $page . '.php';


?>