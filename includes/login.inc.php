<?php 
    session_start();

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("location: ../welcome.php");
    }

    include('./dbh.inc.php');
    $pdo = pdo_connect_mysql();
    

    $username = $password = "";

    if(isset($_POST['login_user'])){
        $username = $_POST['username'];
        $password = $_REQUEST['password'];

        $sql = "SELECT idaccounts, username, password FROM accounts WHERE username = '$username'";
        $stmt = $pdo->prepare($sql);

        if ($stmt->execute()){
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            echo "execute";
            if($stmt->rowCount() == 1){
                echo "\nuser exists";
                if ($user['password'] == $password){
                    echo "Correct credentials";
                    $_SESSION["loggedin"] = true;
                    $_SESSION["username"] = $username;
                    header("location: ../welcome.php");
                }
                else{
                    echo "Wrong password";
                }
            }
            else {
                echo "Wrong username";
            }

        }
        else{
            echo "Ups... something went wrong!";
        }

    }
   

    // $username = "";
    // $email = "";

    // if(isset($_POST('login_user'))){
    //     $username = $_POST['username'];
    //     $password = $_POST['password'];

    //     if(empty($username)) {
    //         echo "Please enter username";
    //     }
        
    //     elseif(empty($password)) {
    //         echo "Please enter password";
    //     }

    // }

?>