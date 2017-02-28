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


  <!-- Arrays -->
<?php
$example1 = array();
$example2 = [];

// Adding items to arrays
$fruits = array("apple","orange","pear");
$fruits2 = ["apple","orange","pear"];

//prints the contents of the array and their positions of the index
print_r($fruits2);


//appending values
$fruits2[] = "peach";
print_r($fruits2);

//accessing array values
echo $fruits2[0];
//prints out the first index of fruits2, in this case apple

//modifying index values
$fruits2[0] = "strawberries";

//associatave arrays similar to objects in JS
$fruits3 = array(
  'strawberry'=> 'red',
  'banana'=> 'yellow'
);

print_r($fruits3);
?>

</body>
</html>
