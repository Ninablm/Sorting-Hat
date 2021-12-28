<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../assets/css/style.css" type="text/css">

    </head>
    <body>
        <h1>
            Your profile has been added to our database !
        </h1>

        <a href="../users.php">
            <input type="submit" value="Put people in a house" class="button">
        </a>

    </body>
    </html>
<?php
//with this code we added data of form to database

    include_once "../includes/db.php";  //include database

    $firstname = $_POST["firstname"];             
    $gender = $_POST["gender"]; 
    $age =  $_POST["age"]; 
    $city =  $_POST["city"]; 
    $description =  $_POST["description"]; 

    if ($firstname != null || $gender != NULL || $age != NULL || $city != NULL || $description != NULL) 
    {
        insertQuery($conn, "INSERT INTO users (Firstname, Gender, Age, City, Description) VALUES ('$firstname', '$gender', '$age', '$city', '$description')");
    }


?>