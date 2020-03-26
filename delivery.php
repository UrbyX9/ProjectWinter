<?php 
    include_once('./includes/country.inc.php')

?>


<?=template_header('Shipping Details')?>


    <form action="./index.php?page=delivery<" method="post">
        <label>First name: </labeL>
        <input type="text" name="fname" placeholder="First Name" required>
        <label>Last name: </label>
        <input type="text" name="lname" placeholder="Last Name" required>

        <label>City: </label>
        <input type="text" name="city" required>

        <label>Country: </label>
        <input list="countries" name="country" required>
        <datalist id="countries">
           <?php foreach($country_list as $row){
            echo '<option value="'.$row['country'].'">';
        }
            ?>
        </datalist>
        <input type="submit">


    </form>



<?=template_footer()?>