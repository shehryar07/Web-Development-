 <?php
        $server_name = "localhost";
        $username = "root";
        $password = "";
        $database_name = "Shehryar Autos";

        $con = mysqli_connect($server_name, $username, $password, $database_name);
        if(!$con)
        {
            die("Connection to this DataBase Failed" .mysqli_connect_error());
        }
    

        
    ?>
