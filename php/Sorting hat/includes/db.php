<?php
// CONNECTIE DATABASE 

    $dbhostname = "ID367372_sortinghat1.db.webhosting.be";    //locatie van sql server/database    ID367372_sortinghat1.db.webhosting.be
    $dbUser = "ID367372_sortinghat1";   //username om in te loggen
    $dbPassword = "sorting_hat1";    //password om in te loggen
    $dbName = "ID367372_sortinghat1";    //verplicht tot hier
    $port = 3306;   //port of mysql zie mamp
    
    $conn = mysqli_connect($dbhostname, $dbUser, $dbPassword, $dbName, $port); //connectie database in een variabele 

     //checken of ik connectie heb met database
    if ($conn == false) {
        echo "ik kan database niet bereiken ";
        die();  
    }

    //functie om direct query aan te maken en ni altijd manueel
    function getQuery($conn, $query){
        return mysqli_query($conn, $query)->fetch_all(MYSQLI_ASSOC);
    }

    //functie om query toe te voegen
    function insertQuery($conn, $query)
    {
        return mysqli_query($conn, $query)->fetch_all(MYSQLI_ASSOC);
    }

    //functie om connectie direct te sluiten
    function closeConnection($conn){
        $conn->close();
    }

?>

