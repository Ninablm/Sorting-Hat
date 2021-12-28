<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
    </head>
    <body>
        
        <?php
            include "./includes/db.php";

            $users = getQuery($conn, "SELECT * FROM users WHERE UserID = 1");

            foreach ($users as $user) {
        ?>
                <?php  
                $userFirstname = $user['Firstname'];
                $userDesc = $user['Description'];
                $userAge = $user['Age'];
                $userCity = $user['City'];
                $userGender = $user['Gender'];
                ?> 
                <?php
            }
                closeConnection($conn)
            ?>

            <p class="userStyling"> <?php echo $userFirstname; ?> </p>
            
            <img src="./assets/images/user1.jpg" alt="Ines" class="userImage">

            <div class="information">
                <p> <?php echo $userDesc; ?> </p>
                <p> <?php echo $userAge; ?> </p>
                <p > <?php echo $userCity; ?> </p>
                <p > <?php echo $userGender; ?> </p>
            </div>
           
            <!-- Houses-->
            
                <input type="submit" name="house1" id="house1" value="This is a Gryffondor!"class="button">
                <input type="submit" name="house2" id="house2" value="This is a Slytherin!"class="button"><br>
                <input type="submit" name="house3" id="house3" value="This is a Ravenclaw!"class="button">
                <input type="submit" name="house4" id="house4" value="This is a Hufflepuff!"class="button">
        
            <br>
            <br>

            <a href="secondUser.php">
                <button id="button-new">
                Go to next person
            </button>
            </a>
            


    </body>
    </html>