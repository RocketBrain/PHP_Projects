<?php
//global variables



// checks to make sure the data was submitted
if($_SERVER['REQUEST_METHOD'] === 'POST'){

  $date =  $_POST['date'];
  $email =  $_POST['email'];
  $description =  $_POST['desc'];

  echo "<p>Date: $date</p>";
  echo "<p>E-mail: $email</p>";
  echo "<p>Description: $description</p>";
}


?>



<body>
<?php include('../../app/views/header.php'); ?>

<form class="" action="content.php" method="post">
  <label for="date"> Todays Date </label><br>
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
</body>



</html>
