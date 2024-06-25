<?php

include 'connection.php';
   if(isset($_POST['Send']))
   {
       $Name = $_POST['Name'];
       $Email = $_POST['Email'];  
       $Phone = $_POST['Phone'];
       $Color = $_POST['Color'];
       $Model = $_POST['Model'];
       $Numebrs = $_POST['Numebrs'];
       $Adress_1 = $_POST['Adress_1'];
       $City = $_POST['City'];
       $Region = $_POST['Region'];
       $Postal = $_POST['Postal'];
       $country = $_POST['country'];
       $notes = $_POST['notes'];
 
   }
   


    $sql = "INSERT INTO `cart_form` (`Name`, `Email`, `Phone`, `Color`, `Model`, `Numebrs`, `Adress_1`, `City`, `Region`, `Postal`, `country`, `notes`) VALUES ('$Name', '$Email', '$Phone', '$Color', '$Model', '$Numebrs', '$Adress_1', '$City', '$Region', '$Postal', '$country', '$notes');";


    
    if($con->query($sql) == true)
    {
      header( 'location: index.php');
    }
    else
    {
      echo "There is an ERROR"."Error: $sql <br> $con->error";
    }



?>