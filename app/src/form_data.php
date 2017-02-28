<?php

//requires file from validation page
//dir gives an absolute path of current file
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/validation.php';
use Respect\Validation\Validator;
use Respect\Validation\Exceptions\NestedValidationException;



if($_SERVER['REQUEST_METHOD'] === 'POST'){
//remove whitespace with trim
  $date =  trim($_POST['date']);
  $email =  trim($_POST['email']);
  $description =  trim($_POST['desc']);

  $date_validator = Validator::date('d-m-Y')->notEmpty();
  $email_validator = Validator::email()->notEmpty();
  $desc_validator = Validator::stringType()->length(1,750);

  try{
    $date_validator->assert($date);
    $email_validator ->assert($email);
    $desc_validator ->assert($description);

    echo date('F jS Y', strtotime($date));
    echo $email;
    echo $description;
  }
catch (NestedValidationException $e) {
echo '<ul>';
foreach ($e->getMessages() as $message) {
  echo "<li>$message</li>";
  }
}
echo '</ul>';
}



//verify data is not empty
  if(!empty($date) && !empty($email) && !empty($description)){  //filter out extraneous user input with htmlspecialchars

  $value = validate_date($date);

  if(is_array($value)) {
    foreach ($value as $error) {
      echo "<span class='error'>$error</span";
    }
  } else {
    echo $value;
  }

  if (filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo '<p> E-mail: ' . htmlspecialchars($email) . '</p>';
  }
  else {
    echo "<p>Please put in a proper e-mail address.</p>";
  }
    echo '<p> Description: ' . htmlspecialchars($description) . '</p>';
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
