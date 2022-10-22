<?php
$serverName = "eu-az-sql-serv1.database.windows.net"; // update me
$connectionOptions = array(
                    "Uid" => "upjuoq7bx5i2qav", // update me
                    "PWD" => "9y7Xlbah#TeRWYFD3hhPK3hLI", // update me
                    "Database" => "d4inlpy2hl419fl" // update me
);
    //Establishes the connection
//$connect = SQLSRV_CONNECT($serverName, $connectionOptions);
    
    $connect = new mysqli($ServerName, $connectionOptions);

        if(!$connect){
            die("No Connection to SQL Server": $connect);
        }
    
?>
