<?php
/**
 * Created by PhpStorm.
 * User: ÈÙˆÖ
 * Date: 2015/6/26
 * Time: 16:44
 */
if(!isset($_SESSION['username']))
{
    header("Location: ?page=login");
}
$ad = new AddressManager();
$pm = new PersonManager();

if(isset($_POST['add']))
{
    $addNum = $ad->addAddress($_POST['street'],$_POST['city']);
    $pm->addPerson($_POST['first_name'],$_POST['last_name'],$_SESSION['username'],$addNum);
    header("Location: ?page=list");

}
?>

<form action="index.php?page=add" method="post">
    <span>First Name:</span><input type="text" name="first_name"/><br/><br/>
    <span>Last Name:</span><input type="text" name="last_name"/><br/><br/>
    <span>street:</span><input type="text" name="street"/><br/><br/>
    <span>city</span><input type="text" name="city"/>
    <br/><br/>
    <input type="submit" value="add" name="add"  />
    <a href="index.php?page=list">Back</a>

</form>