<?php     
    require_once('./dbh.inc.php');
    $pdo = pdo_connect_mysql();
    // variables
    $username = "";
    $email = "";
   # $errors = array();
    
    if(isset($_POST['reg_btn'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_REQUEST['password_1'];
        $pass_confirm = $_REQUEST['password_2'];
        
        #echo $username;
        
        /* ERROR MSG */
        if(empty($username)) {
            echo "Please enter username";
        }
        elseif (empty($email)) {
            echo "Please enter email";
        }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Please enter a vilid email address";
        }
        elseif (empty($pass)) {
            echo "Please enter password";
        }
        elseif (empty($pass_confirm)) {
            echo "Please confirm password";
        }
        elseif ($pass != $pass_confirm) {
            echo "PLease check you password";
        }

        // else {

        //     $Us_Em_stmt = $pdo->prepare("SELECT username, email FROM accounts 
        //     WHERE username=:uname OR email=:mail");
        
        // $Us_Em_stmt->execute(array(':uname'=>$username, ':mail'=>$email));
        // $row = $Us_Em_stmt->fetch(PDO::FETCH_ASSOC);

        // if ($row["username"]==$username) {
        //     echo "Username already exists";
        // }
        // elseif ($row["email"]==$email) {
        //     echo "Email already exists";
        // }
        else {
            #$new_password = password_hash($pass, PASSWORD_DEFAULT);
            $data = [
                'username' => $username,
                'email' => $email,
                'password' => $pass
            ];

            $sql_insert = "INSERT INTO accounts (username, email, password)
            VALUES (:username, :email, :password)";

            $insert_stmt = $pdo->prepare($sql_insert)->execute($data);

        }


    }




?>