<?php
$serverName = "eu-az-sql-serv1.database.windows.net"; // update me
$connectionOptions = array(
                    "Database" => "d4inlpy2hl419fl", // update me
                    "Uid" => "upjuoq7bx5i2qav", // update me
                    "PWD" => "9y7Xlbah#TeRWYFD3hhPK3hLI" // update me
);
    //Establishes the connection
$connect = sqlsrv_connect($serverName, $connectionOptions);
    
    //new mysqli('127.0.0.1:53542', 'azure', '6#vWHD_$', 'contactmanagement');

        if(!$connect){
            die(sqlserv_errors($connect));
        }
    
?>
