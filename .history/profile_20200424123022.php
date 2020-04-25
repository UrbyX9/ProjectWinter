<?php
    include_once('./functions.php');
    $pdo = pdo_connect_mysql();
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: ./login.php");
        exit;
    }

    $stmt = $pdo->prepare('SELECT * FROM countries');
    $stmt->execute();
    
    $countries = $stmt->fetchAll(PDO::FETCH_ASSOC);

    
?>

<?=template_header('Profile')?>

<div class="container">

    <h2>Profil</h2>

    <form method="post" action="./includes/profile.inc.php" class="content">
        
        <div class="input_item">
            <lable>Ime:</lable>
            <input type="text" name="name" placeholder="Ime" required>
        </div>
        <div class="input_item">
            <label>Priimek:</label>
            <input type="etext" name="surname" placeholder="Priimek" required>
        </div>
        <div class="input_item">
            <label>Telefonska številka:</label>
            <input type="text" name="phone_number" placeholder="041735123">
        </div>
        <div class="input_item">
            <label>Naslov:</label>
            <input type="text" name="address" placeholder="Naslov" required>
        </div>
        <div class="input_item">
            <label>Hišna številka:</label>
            <input type="text" name="house_number" placeholder="Hišna št." required>
        </div>
        <div class="input_item">
            <label>Poštna številka:</label>
            <input type="text" name="postal_code" placeholder="Poštna št." required>
        </div>
        <div class="input_item">
            <label>Mesto:</label>
            <input type="text" name="city" placeholder="Mesto" required>
        </div>
        <div class="input_item">
            <label>Država:</label>
            <input list="countries" name="country">
            <datalist id="countries">
                <?php foreach($countries as $item): ?>
                    <option value="<?=$item['country']?>">
                <?php endforeach; ?>
                </datalist>
        </div>
        <div class="input_item">
            <button type="submit" name="save_btn" class="sub-btn" value="Posodobi">Posodobi</button>
        </div>
        
        <p>Izpiši se: <a href="./logout.php">Izpis</a>
        </p>
    
    </form>

</div>

<?=template_footer()?>