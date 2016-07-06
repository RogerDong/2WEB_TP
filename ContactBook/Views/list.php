<?php
/**
 * Created by PhpStorm.
 * User: ÈÙˆÖ
 * Date: 2015/6/26
 * Time: 15:40
 */

    if(!isset($_SESSION['username']))
    {
        header("Location: ?page=login");
    }
    $pm = new PersonManager();
    $person = $pm->getAllPerson($_SESSION['username']);
    $am = new AddressManager();

    echo "<p>Username:</p>".$_SESSION['username'];

    echo "<hr/><p>ID&nbsp;&nbsp;First Name&nbsp;&nbsp;Last Name</p>";
    echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;Address&nbsp;&nbsp;Street&nbsp;&nbsp;City</p>";


    foreach($person as $row)
    {
        $id = $row['id'];
        $addNum = $row['address'];
        echo "<hr/><p>".$row['id'].'&nbsp;&nbsp;'.$row['first_name'].'&nbsp;&nbsp;'.$row['last_name']."</p>";
        $address = $am->getAddress($row['address']);
        foreach($address as $row)
        {
            if($row['number']==$addNum)
            echo "<p>".'&nbsp;&nbsp;&nbsp;&nbsp;'.'Address: '.$row['street'].'&nbsp;&nbsp;'.$row['city'].'</p>';

        }
        echo '<a href="index.php?page=edit&id='.$id.'">Edit</a>';

    }

?>


<hr/>
<a href="index.php?page=add">Add</a>