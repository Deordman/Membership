<?php 

    define("_DBHOST" , "localhost");
    
    define("_DBNAME" , "membership");
    
    define("_DBUSER" , "root");
    
    define("_DBPASS" , "");

    try
    {
        $connect = new PDO ("mysql:host="._DBHOST.";dbname="._DBNAME, _DBUSER, _DBPASS);

        $connect -> exec ("SET NAMES UTF8");
    }

    catch(PDOException $hatacek)
    {
        echo $hatacek -> getMessage();

        die;
    }

?>