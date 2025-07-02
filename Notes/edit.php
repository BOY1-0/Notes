<?php 
if(!isset($_GET['i'])){
    header('location:display.php');
}
$server="localhost";
$user="root";
$password="";
$database="notes_data";

$conn=mysqli_connect($server,$user,$password,$database);
$id=$_GET['i'];
$q="SELECT * FROM allnotes WHERE ID='$id'";
$result=mysqli_query($conn,$q);
$r=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
  margin: 0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #eee;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

.note-container {
  background-color: #fff89a;
  border: 1px solid #d1d1d1;
  width: 400px;
  padding: 20px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
  background-image: repeating-linear-gradient(
    to bottom,
    #fff89a,
    #fff89a 29px,
    #e3e3e3 30px
  );
  border-radius: 15px 15px 10px 10px;
  position: relative;
}

.spiral-header {
  position: absolute;
  top: -15px;
  left: 0;
  width: 100%;
  height: 20px;
  background-color: #6d4c41;
  border-radius: 10px 10px 0 0;
}

.note-container h1 {
  font-size: 28px;
  text-align: center;
  margin: 10px 0 20px;
  color: #222;
  text-decoration: underline red double;
}

form label {
  display: block;
  font-weight: bold;
  margin-top: 10px;
}
 input[type="text"]{
  border: 1px solid #6d4c41;
  width: 100%;
  padding: 8px;
  margin-top: 4px;
  background-color: #fff89a;
  border-top: none;
  border-left: none;
  border-right: none;
  outline: none;
}
textarea {
  border: 3px solid #6d4c41;
  width: 100%;
  padding: 5px;
  margin-top: 4px;
  background-color: #fff89a;
  outline: none;
}
input[type="submit"]{
width: 27%;
padding: 10px;
background-color: #6d4c41;
color: white;
border: none;
margin-left:145px ;
border-radius: 3px;
}
::placeholder{
    color: #6d4c41;
}
 button{
width: 25%;
padding: 5px;
background-color: #6d4c41;
color: white;
border: none;
margin-left:145px ;
border-radius: 3px;
}
    </style>
</head>
<body>
     <div class="note-container">
    <div class="spiral-header"></div>

    <h1>📝 Notes</h1>

    <form action="database.php" method="POST">
      <input type="hidden" VALUE="<?=$r['ID'];?>" name="i"/>

      <label for="title">Header:</label>
      <input type="text" id="title" VALUE="<?=$r['title'];?>" name="title" placeholder="Enter note title..." required />

      <label for="description">Description:</label>
      <textarea id="description"   name="description" rows="5" placeholder="Write your note here..."><?=$r['notes'];?></textarea>

      <label for="writer">Writer:</label>
      <input type="text" id="writer" VALUE="<?=$r['writer'];?>" name="writer" placeholder="Written by..." />
      <br><br><br>
    <input type="submit" name="submit" value="Submit" />

    </form>
  </div>
</body>
</html>