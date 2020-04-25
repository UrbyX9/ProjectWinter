
<?=template_header('Delivery')?>


    <form action="./index.php?page=delivery" method="post">

        <label>First name: </labeL>
        <input type="text" name="fname" placeholder="First Name" required>
        <label>Last name: </label>
        <input type="text" name="lname" placeholder="Last Name" required>

        <label>City: </label>
        <input type="text" name="city" required>

        <label>Country: </label>
        <input list="countries" name="country" required>
        <datalist id="countries">

        </datalist>



    </form>



<?=template_footer()?>