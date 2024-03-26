<!DOCTYPE html>
<html>
  <head>
    <title>Title</title>
  </head>
  <body>
    <?php
    echo "<h1>Calculating Salary in PHP</h1>";
    ?>
    <form action="./results.php" method="post" target="results">
      <label for=lblBase">Wage (CAD):</label>
      <input type="float" id="pay" placeholder="Enter your hourly wage" name="pay"><br><br>
      <label for="lblHeight">Hours:</label>
      <input type="number" id="hours" placeholder="Enter the hours you worked" name="hours"><br><br>
      <input type="submit" value="Calculate pay">
    </form>
    <iframe id="results" name="results">			
      You will recieve + $incom + Dollars
    </iframe>
  </body>
</html>
