<?php 
$server = "localhost";
$user="root";
$pass ="";
$database="notes_data";

$conn=mysqli_connect($server,$user,$pass,$database );


if(isSet($_POST['send'])){
    $title=mysqli_real_escape_string($conn,$_POST["title"]);
    $description=mysqli_real_escape_string($conn,$_POST["description"]);
    $writer=mysqli_real_escape_string($conn,$_POST["writer"]);
    // $time=$_POST["time"];

   
   $Q="INSERT INTO allnotes(title,notes,writer)VALUES('$title','$description','$writer')";
   
   If(mysqli_query($conn,$Q)){
     header("location:display.php");
}
}
if(ISSET($_POST['submit'])){
  
    $ID=$_POST['i'];
    $title=$_POST["title"];
    $des=$_POST["description"];
    $writer=$_POST["writer"];


    $q="UPDATE allnotes SET title='$title',notes='$des', writer='$writer' WHERE ID='$ID'";
    if(mysqli_query($conn,$q)){
      header("location:display.php");
    }    
   }
?>











