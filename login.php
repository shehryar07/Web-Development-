<?php

include 'connection.php';

if(isset($_POST['Submit']))
{

$Email_Adress = $_POST['Email'];
$Password = $_POST['Password'];

}

$sql = "SELECT `Email_Adress`, `Password` FROM user_login_form";

if($con->query($sql) == true)
{
    header( 'location: Website/index.php ');
}

else
{
    header( 'location: index.php');
}

?>