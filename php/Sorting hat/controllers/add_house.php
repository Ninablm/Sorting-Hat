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