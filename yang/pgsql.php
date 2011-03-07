<?php
/*** pgsql hostname ***/
$hostname = 'localhost';

/*** pgsql dbname ***/
$dbname = 'ps_yang';

/*** pgsql username ***/
$username = 'yangsu';

/*** pgsql password ***/
$password = 'duke13';

try {
    $db = new PDO("pgsql:dbname={$dbname};host={$hostname}", $username, $password );
    echo "PDO connection object created<br/>";
    
    $sql="INSERT INTO events(device_id, active, timestamp) VALUES (1, 'true',".time().")";
    
    echo $sql."<br/>";
    /*** INSERT data ***/
    $count = $db->exec($sql);

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