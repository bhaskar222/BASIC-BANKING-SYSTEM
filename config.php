<?php

	$db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_name = "sparks_banks";
        $db_port = 3306;
             
            $conn = mysqli_connect($db_host,$db_user,$db_password,$db_name,$db_port);

            if(!$conn){
                 die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>