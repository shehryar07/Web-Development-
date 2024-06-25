<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insert</title>
</head>
<body>
   <?php
   
include 'connection.php';

if(isset($_POST['Submit']))
{

$Name = $_POST['name'];

$Education = $_POST['Email'];


$Email_Adress = $_POST['Password'];


$Password = $_POST['gender'];


}

 
 $sql = "INSERT INTO `Shehryar Autos`.`user_login_form` (`name`, `Email`, `Password`, `gender`) VALUES ('$name', '$Email', '$Password', '$gender');";


   if($con->query($sql) == true)
   {
    header( 'location: Website/index.php');
   }
   else
   {
    header( 'location: Website/index.php');
   }


  

   ?>
</body>
</html>