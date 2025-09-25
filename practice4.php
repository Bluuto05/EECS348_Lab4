<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Multiplication Table Generator</title>
  <link rel="stylesheet" href="styles3.css">
</head>
<body>
  <div class="container">
    <h2>Multiplication Table Generator</h2>
    
    <form method="post" action="">
      <label for="rows">Number of Rows:</label>
      <input type="number" id="rows" name="rows" min="1" required>
      
      <label for="cols">Number of Columns:</label>
      <input type="number" id="cols" name="cols" min="1" required> <br><br>
      
      <button type="submit">Generate Table</button>
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $rows = intval($_POST["rows"]);
          $cols = intval($_POST["cols"]);

          if ($rows > 0 && $cols > 0) {
              echo "<h3>Multiplication Table ($rows x $cols)</h3>";
              echo "<table>";
              echo "<thead><tr><th>*</th>";

              // Table header row
              for ($j = 1; $j <= $cols; $j++) {
                  echo "<th>$j</th>";
              }
              echo "</tr></thead><tbody>";

              // Table rows
              for ($i = 1; $i <= $rows; $i++) {
                  echo "<tr>";
                  echo "<th>$i</th>";
                  for ($j = 1; $j <= $cols; $j++) {
                      echo "<td>" . ($i * $j) . "</td>";
                  }
                  echo "</tr>";
              }

              echo "</tbody></table>";
          } else {
              echo "<p class='error'>Please enter numbers greater than 0.</p>";
          }
      }
    ?>
  </div>
</body>
</html>
