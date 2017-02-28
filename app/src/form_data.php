<?php

//requires file from validation page
//dir gives an absolute path of current file
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/validation.php';

//use allows us to use which classes we normalizer_is_normalized
use Respect\Validation\Validator;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
//remove whitespace with trim
  $date =  trim($_POST['date']);
  $email =  trim($_POST['email']);
  $description =  trim($_POST['desc']);



//verify data is not empty
  if(!empty($date) && !empty($email) && !empty($description)){  //filter out extraneous user input with htmlspecialchars

    //uses validate_date function to verify date is valid.
    echo validate_date($date);

  if (filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo '<p> E-mail: ' . htmlspecialchars($email) . '</p>';
  }
  else {
    echo "<p>Please put in a proper e-mail address.</p>";
  }
    echo '<p> Description: ' . htmlspecialchars($description) . '</p>';
  }
}
?>

<form class="form-style-3" action="content.php" method="post">
  <label for="date"> Today's Date </label><br>
  <input type="text" name="date" value="">
  <hr>
  <br>

<label for="email"> Your E-mail</label><br>
<input type="text" name="email" value="">
<hr>

<label for="desc"> Describe your problem </label>
<textarea name="desc" rows="8" cols="40"></textarea>
<br>

<input type="submit" value="submit">
</form>

</html>
