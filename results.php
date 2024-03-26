<?php
  $pay = $_POST['pay'];
  $hours = $_POST['hours'];
  $income = $pay * $hours
?>
<h3>Result:</h3>
You will recieve <?php echo $income*.85 ?>$