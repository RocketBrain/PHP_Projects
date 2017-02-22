<!DOCTYPE html>
<html>
<head>
  <title>Creating Code Block</title>
  <style>
  p {
    color: red;
  }
  h1 {
    color:blue;
  }
  </style>
</head>
<body>
  <!--echo generates p onto page.-->
  <p><?php echo 'Hello World!'; ?></p>

  <!-- setting up a variable name with $ followed by variable-->
  <p><?php $name = 'Edward';?></p>

  <!-- variables can be called once they are stored in memory-->
  <h1><?php echo $name;?></h1>

  <!-- concatenating in php with .-->
  <p><?php echo "What is your name? " . "My name is " . $name . "."?></p>

  <!-- second method of concatenation, double quotes wrapped outside of variable-->
  <p><?php echo "What is your name? My name is $name."?></p>



</body>
</html>
