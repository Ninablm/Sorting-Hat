<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">        
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&family=Permanent+Marker&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>
           Create account
        </h1>

        <!-- FORM --> 
        <div id="label-black">
            <form action="./controllers/add_user.php" method="POST">   

                <label for="firstname">
                    Give your firstname
                </label>
                <br>
                <input type="text" id="firstname" name="firstname" placeholder="Give your firstname" class="field">
                <br>

                <label for="gender">
                    Gender
                </label>
            <br>
                <input type="text" name="gender" id="gender" placeholder="Enter your gender" class="field">
                <br>

                <label for="age" >
                    Age
                </label>

            <br>    

                <input type="text" name="age" id="age" placeholder="Enter your age" class="field">

            <br>
            
                <label for="city" >
                    City
                </label>

            <br>

                <input type="text" name="city" id="city" placeholder="Enter your city" class="field">
                <br>
                
                <label for="description" >
                    Description
                </label>

            <br>

                <input type="text" name="description" id="description" placeholder="Enter a description of yourself" class="field">
            <br>

            <br>

                <input type="submit" value="Create account" class="button"/>
            
            </form> 
       </div>

    </body>
    </html>
    
        
