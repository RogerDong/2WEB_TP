<?php
/**
 * Created by PhpStorm.
 * User: ÈÙˆÖ
 * Date: 2015/6/26
 * Time: 17:45
 */
if(!isset($_SESSION['username']))
{
    header("Location: ?page=login");
}
$pm = new PersonManager();

$person = $pm->getOnePerson($_GET['id']);

$am = new AddressManager();
$address = $am->getAddress($person->getAddress());


?>

<form action="index.php?page=add" method="post">
    <span>First Name:</span><input type="text" name="first_name" value=
        <?php
           echo $person->getFirstName();
        ?>
        /><br/><br/>
    <span>Last Name:</span><input type="text" name="last_name" value=
        <?php
            echo $person->getLastName();
        ?>
        /><br/><br/>
    <span>street:</span><input type="text" name="street" value=
        <?php

        ?>

        /><br/><br/>
    <span>city</span><input type="text" name="city"/>
    <br/><br/>
    <input type="submit" value="add" name="add"  />
    <a href="index.php?page=list">Back</a>

</form>