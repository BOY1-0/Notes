<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "notes_data";

$conn = mysqli_connect($server, $user, $password, $database);

if (isset($_GET['d'])) {
    $ID = $_GET['d'];
    $q = "DELETE FROM allnotes WHERE ID = '$ID'";
    mysqli_query($conn, $q);

    
    header("Location: display.php"); 
    
} 
    

?>
