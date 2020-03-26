<?php 
    include_once('./functions.php');
?>

<?=template_header('Registration')?>

<div class="container">

    <form method="post" action="./includes/registration.inc.php" class="content">
        
        <div class="input_item">
            <lable>Username:</lable>
            <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="input_item">
            <label>Email:</label>
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input_item">
            <label>Password:</label>
            <input type="password" name="password_1" placeholder="Password" requiredk>
        </div>
        <div class="input_item">
            <label>Confirm password</label>
            <input type="password" name="password_2" placeholder="Confirm password">
        </div>
        <div class="input_item">
            <button type="submit" name="reg_btn" class="sub-btn" value="Register">Register</button>
        </div>
        
        <p>Member login <a href="./login.php">Sign in</a>
        </p>
    
    </form>

</div>

<?=template_footer() ?>