<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Parisienne&family=Permanent+Marker&display=swap" rel="stylesheet">
    </head>
    <body>

        <?php
            include_once "./includes/db.php";
        ?>

        <h1>
            Let's play a game !
        </h1>

        <div>
            <img src="../assets/images/gryffindor.gif" alt="gryffindor">
        </div>

        <br><br>

        <nav> 
            <a href="form.php">
                <button class="button">
                    Add person
                </button>
            </a>
             
        <br><br>

            <a href="users.php">
                <button class="button">
                Put people in a house
            </button>
            </a>
            
        </nav>
       
    </body>
    </html>