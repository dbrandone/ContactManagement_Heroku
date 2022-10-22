<?php
$serverName = "eu-az-sql-serv1.database.windows.net"; // update me
$username = "upjuoq7bx5i2qav"; // update me
$password = "9y7Xlbah#TeRWYFD3hhPK3hLI"; // update me
$database = "d4inlpy2hl419fl"; // update me

    //Establishes the connection
//$connect = SQLSRV_CONNECT($serverName, $connectionOptions);
    
    $connect = mysqli_connect($serverName, $username, $password, $database);

        if(!$connect){
            die("No Connection to SQL Server");
        }
    
?>
