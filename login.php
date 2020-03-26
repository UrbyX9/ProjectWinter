<?php
 include_once('./functions.php');

?>

<?=template_header('Login')?>
<div class="container">
    <form method="post" action="./includes/login.inc.php" class="content">
        
        <div class="input_item">
            <label>Username:</label>
            <input type="text" name="username" placeholder="username" required>
        </div>
        
        <div class="input_item">
            <label>Password:</label>
            <input type="password" name="password" placeholder="password" required>
        </div>

        <div class="input_item">
            <button type="submit" name="login_user" class="sub-btn" value="Login">Login</button>
        </div>
        
        <p>Make account: <a href="./register.php">Register</a></p>

    </form>
</div>

<?=template_footer()?>