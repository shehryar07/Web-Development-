<?php
   
   include 'connection.php';
   if(isset($_POST['Send']))
   {
       $Name = $_POST['Name'];
       $Email = $_POST['Email'];  
       $Subject = $_POST['Subject'];
       $Massage = $_POST['Massage'];
   }
   

    $record = "INSERT INTO `Shehryar Autos`.`contact_form` (`Name`, `Email`, `Subject`, `Massage`) VALUES ('$Name', '$Email', '$Subject', `$Massage`);";

      if($con->query($record) == true)
      {
        header( 'location: index.php');
      }
      else
      {
        header( 'location: index.php');
      }
   
   
      ?>
   