<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>View Note</title>
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

    .note-view {
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

    .note-view h1 {
      font-size: 28px;
      text-align: center;
      margin-bottom: 20px;
      color: #222;
      text-decoration: underline red double;
    }
    
    .note-content p {
      margin-bottom: 10px;
      font-size: 15px;
      line-height: 1.4;
    }
    .title {
      font-weight:bold;
       text-decoration: underline red double;      
    }
     button{
width: 20%;
padding: 5px;
background-color: #6d4c41;
color: white;
border: none;
border-radius: 3px;
}
  </style>
</head>
<body>
  <div class="note-view">
    <div class="spiral-header"></div>
    <h1>📝 Notes</h1>

    <div class="note-content">
        <?php
        $conn=mysqli_connect("localhost","root","","notes_data");
        $q="SELECT * FROM allnotes";
        $notes=mysqli_query($conn,$q);
        while($r=mysqli_fetch_assoc($notes)){
        $ID=$r["ID"];
        $title=$r["title"];
        $description=$r["notes"];
        $writer=$r["writer"];
        $time=$r["time"];
        ?>
      

      <p class="title"><strong>Title:</strong> <?php echo $title; ?></p>
      <p><strong>Notes :</strong> <?php echo $description; ?></p>
      <p><strong>Written By:</strong> <?php echo $writer; ?></p>
      <p><strong>Written on:</strong> <?php echo $time; ?></p>
      <a href="edit.php?i=<?php echo $ID; ?>"><button >update</button></a> 
      <a href="delete.php?d=<?= $ID; ?>" onclick="return confirm('Are you sure you want to delete this record?');">
          <button>delete</button>
        </a>

      <?php
        }
      ?>
    </div>
  </div>
</body>
</html>
