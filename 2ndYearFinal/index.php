<?php 
include "conn.php";


// SQL Query to retrieve data from the EVENTS in the database
$sqlevent = "SELECT EventID, EventName, EventOrg, EventOdd
		FROM event
        ORDER BY EventID";

$resultEvent = mysqli_query($conn, $sqlevent);
// $_SESSION['background'] = 'images/math.jpg';
// $background = $_SESSION['background'];  

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

    body{
        background-image: url('<?php echo $_SESSION['background']; ?>');
        background-size: cover;
        background-position: center;
        height: 100vh;
        transition: background-image 0.5s ease;

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
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 25%;
    }
    .text {
      text-align: center;
    }
    /* .my-custom-row {    
            background-color: transparent;
            backdrop-filter: blur(10px);
            position:fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 10px;
            text-align: center;
    } */
    .my-custom-row {    
            /* background-color: orange; */
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
    </style>
    <div class="container">
        <!-- start - content -->
        <div class="box">
            <div class="text">
                <ul class="li"><h1>PROGRESS</h1></ul>
                <ul class="li"><h1>c=[]=====></h1></ul>
                <ul class="li"></ul>
                <ul class="li"></ul>
                
            </div>
        </div>
        <!-- end - content -->
        <div class="menuline"></div>
        <div class="row my-custom-row  justify-content-center align-items-end">

            <!-- Settings -->
            <div class="col-sm-1">
                <div class="p-0 justify-content-center">
                    <a href="Settings.php"><i class="bi bi-gear" style="font-size: 40px; color: black;"></i></a>
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
                <div class="rounded-circle p-0 border bg-light justify-content-center">
                    <a href="Index.php"><i class="bi bi-house-door" style="font-size: 60px; color: black;"></i></a>
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
        
    </div>

    

    <script>
  // Example of how to use the background image functionality from another module

  // Access the BackgroundModule and its functions
  var BackgroundModule = (function() {
    // Define your BackgroundModule here or include its definition from the previous script
  })();
  
  // Call the getBackground() function to get the current background image
  var currentBackground = BackgroundModule.getBackground();
  console.log("Current background image:", currentBackground);

  // You can also call the setBackground() function to change the background image
  // BackgroundModule.setBackground('new_image.jpg');
</script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>