<?php
/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'cheneytsai';

/*** mysql password ***/
$password = 'pshop8';

try {
    $dbh = new PDO("pgsql:host=$hostname;dbname=ps_cheney", $username, $password);
    /*** echo a message saying we have connected ***/
    echo 'Connected to database<br />';

    /*** INSERT data ***/
    $count = $dbh->exec("INSERT INTO events VALUES ('1', 'TRUE', ".time().")");

    /*** echo the number of affected rows ***/
    echo $count;

    /*** close the database connection ***/
    $dbh = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>