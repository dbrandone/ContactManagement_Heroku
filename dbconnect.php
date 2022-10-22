<?php
$serverName = "jbb8y3dri1ywovy2.cbetxkdyhwsb.us-east-1.rds.amazonaws.com"; // update me
$username = "l6u2uczwulj4933u"; // update me
$password = "drijur97yfa48wzz"; // update me
$database = "axox8dwbq0p8lnny"; // update me

    //Establishes the connection
//$connect = SQLSRV_CONNECT($serverName, $connectionOptions);
    
    $connect = new mysqli($serverName, $username, $password, $database);

        if(!$connect){
            die("No Connection to SQL Server");
        }
    
?>
