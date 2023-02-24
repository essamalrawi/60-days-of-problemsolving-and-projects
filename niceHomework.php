<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>
<?php
  $admins = ["Osama", "Ahmed", "Sayed"];
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $myTest = $_POST['user'];
    for ($i =0; $i < 3; $i++) {
      if ($admins[$i] == $myTest) {
        echo $myTest;
        break;
      }
    }
  }
?>



