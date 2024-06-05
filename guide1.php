<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Select Guide and Project</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <form action="connect.php" method="post">
      <h2>Select a Guide and Project</h2>
      <div>
        <label for="guide">Select a Guide:</label>
        <select id="guide" name="guide">
         
        </select>
      </div>
      <div>
        <label for="project">Select a Project:</label>
        <select id="project" name="project">
          <option value="">---SELECT---</option>
          
        </select>
      </div>
      <button type="submit">Save Selection</button>
    </form>
  </div>
</body>
</html>
