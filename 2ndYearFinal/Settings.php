<?php 
include "conn.php";


// SQL Query to retrieve data from the EVENTS in the database
$sqlevent = "SELECT EventID, EventName, EventOrg, EventOdd
		FROM event
        ORDER BY EventID";

$resultEvent = mysqli_query($conn, $sqlevent);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap v5 - Alpha1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> <!-- icon bootstraps -->
</head>
<body>
    
<style>

    body {
        /* display:list-item; */
        justify-content: center;
        align-items: center;
        text-align: center;
        height: 100vh;
        margin: 0;
    }


    /* Style for the form */
    form {
        /* margin-left: 20%; */
        margin: 5%;
        padding: 5%;
        /* width: 65hh; */
        /* border: 1px solid #ccc; */
        border-radius: 5px;
        background: url(images/background.jpg);
        backdrop-filter: blur(15px);
        text-align: center;
        box-shadow: 0px 0px 128px ;
        
    }
    .settings-container{
        text-align: center;
    }

    .logout{
        padding-bottom: 10%;
    }
    
    /* Style for the buttons */
    /* .button {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 10px;
        cursor: pointer;
        border-radius: 5px;
    } */
    .button {
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .button:hover {
        background-color: #0056b3;
    }

    .box{
        margin-top: 1%;
        margin-left: 25%;
        margin-right: 25%;
        margin-bottom: 25%;
        width: 500px;
        height: 500px;
        border: solid;
        background-color: transparent;
        backdrop-filter: blur(15px);
        /* display: flex; */
        /* justify-content: center; */
        align-items: center;
        border-radius: 25%;
    }
    .text {
      text-align: center;
    }
    .my-custom-row {    
            /* background-color: transparent; */
            /* backdrop-filter: blur(10px); */
            position:fixed;
            bottom: 0;
            left: 0;
            /* display:flexbox; */
            width: 100%;
            padding: 10px;
            text-align: center;
            /* border-top: solid; */
    }
    .menuline{
            background-color: grey;
            position:fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 35px; 
            border-top: solid;
    }

    .profile{
        /* display: flex; */
        border: solid;
        border-radius: 100%;
        width: 300px;
        height: 300px;
        margin-left: 5%;
        background: url(images/guest.png);
        background-size:cover;
    }
    .profile-info{
        margin-left: 125%;
    }
    .profile-text{
        margin-bottom: 2rem;;
    }
    .profile-container{
        border-radius: 10px;
        margin: 2rem;
        padding: 10%;
        padding-top: 0;
        border: solid;
        backdrop-filter: blur(100px);
        /* background: white; */
    }
    </style>
    <!-- <div class="container"> -->
        <!-- start - content -->
        <!-- <div class="box">
            <div class="text">
            <ul><h1>SETTINGS</h1></ul>
            <i class="bi bi-globe2">BISAYA</i>
            </div>
        </div> -->
        <!-- end - content -->

        <?php
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Check which button was clicked
            if (isset($_POST['submit_button'])) {
                $clicked_button = $_POST['submit_button'];
                switch ($clicked_button) {
                    case 'Button 1':
                    $_SESSION['background'] = 'images/math.jpg';
                        break;
                    case 'Button 2':
                    $_SESSION['background'] = 'images/math2.jpg';
                        break;
                    case 'Button 3':
                    $_SESSION['background'] = 'images/math3.jpg';
                        break;
                    // case 'Button 4':
                    // session_unset();
                    //     break;
                    // default:
                    //     echo "No button clicked";
                }
            }
        }

        
        if(!isset($_SESSION['background'])){
            $_SESSION['background'] = 'images/math3.jpg';

        
        }else{
            echo "
        <style> 
            body{
                justify-content: center;
                align-items: center;
                background-size: cover;
                background-position: center;
                height: 100vh;
                transition: background-image 0.5s ease;
            background-image: url(\"{$_SESSION['background']}\");
            }
            
            </style>";
        }

        ?>

        <div class="settings-container">

        <div class="settings">
            <h1>SETTINGS</h1>
        </div>
        <form method="post">
            <h1>Theme</h1>
            <!-- Form elements here -->
            <input type="submit" name="submit_button" class="button" value="Button 1">
            <input type="submit" name="submit_button" class="button" value="Button 2">
            <input type="submit" name="submit_button" class="button" value="Button 3">
        </form>
        <div class="profile-container">
            <div class="profile-text">
                <h1>PROFILE</h1>
            </div>
            <div class="profile">
                <div class="profile-info">
                    <h1>USERNAME:</h1>
                    <h5>Duolingo</h5>
                    <h1>AGE:</h1>
                    <h5>18</h5>
                    <h1>SEX:</h1>
                    <h5>YES</h5>
                </div>
            </div>
        </div>

        <!-- <br>1<br1><br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1
        <br>1<br1><br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1
        <br>1<br1><br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1
        <br>1<br1><br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1
        <br>1<br1><br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1<br>1 -->
        <div class="logout" >
            <input type="submit" name="submit_button" class="button" value="Logout">

        </div>
        </div>

        <!-- Form -->
        

        
        <div class="menuline"></div>
        <div class="row my-custom-row  justify-content-center align-items-end">
            

            <!-- Settings -->
            <div class="col-sm-1">
                <div class=" rounded-circle p-0 bg-light justify-content-center">
                    <a href="Settings.php"><i class="bi bi-gear" style="font-size: 60px; color: black;"></i></a>
                </div>
            </div>
            <!-- Symbols -->
            <div class="col-sm-1">
                <div class="p-0 justify-content-center">
                    <a href="Symbols.php"><i class="bi bi-plus-slash-minus" style="font-size: 40px; color: black;"></i></a>
                </div>
            </div>
            <!-- Home -->
            <div class="col-sm-1"> 
                <div class=" p-0 justify-content-center">
                    <a href="Index.php"><i class="bi bi-house-door" style="font-size: 40px; color: black;"></i></a>
                </div>
            </div>
            <!-- Inventory -->
            <div class="col-sm-1">
                <div class="p-0 justify-content-center">
                    <a href="Inventory.php"><i class="bi bi-backpack2" style="font-size: 40px; color: black;"></i></a>
                </div>
            </div>
            <!-- Notifications -->
            <div class="col-sm-1">
                <div class="p-0 justify-content-center">
                    <a href="Notifications.php"><i class="bi bi-bell" style="font-size: 40px; color: black;"></i></a>
                </div>
            </div>
        </div>
        
        

        
    <!-- </div> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>