<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Note Pad</title>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>
  <div class="note-container">
    <div class="spiral-header"></div>

    <h1>📝 Notes</h1>

    <form action="database.php" method="POST">
      <label for="title">Header:</label>
      <input type="text" id="title" name="title" placeholder="Enter note title..." required />

      <label for="description">Description:</label>
      <textarea id="description" name="description" rows="5" placeholder="Write your note here..."></textarea>

      <label for="writer">Writer:</label>
      <input type="text" id="writer" name="writer" placeholder="Written by..." />
      <br><br><br>
    <input type="submit" name="send" value="Submit" />

    </form>
  </div>
</body>
</html>
