<?php
session_start();
// Assuming you have a session variable called 'background_color'
$backgroundColor = isset($_SESSION['background_color']) ? $_SESSION['background_color'] : '#ffffff'; // Default color if session variable is not set
?>

<style>
  body {
    background-color: <?php echo $backgroundColor; ?>;
  }
</style>
