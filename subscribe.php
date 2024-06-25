<?php
   
   include 'connection.php';
   if(isset($_POST['subscribe']))
   {
       $Email_Adress = $_POST['Email_Adress'];
   }
   

    $record = "INSERT INTO `Shehryar Autos`.`subscribers` (`Email_Adress`) VALUES ('$Email_Adress');";

      if($con->query($record) == true)
      {
        header( 'location: index.php');
      }
      else
      {
        echo "There is an ERROR"."Error: $record <br> $con->error";

      }
   
   
      ?>