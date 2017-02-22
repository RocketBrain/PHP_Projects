
  <!-- Arrays -->
<?php
$example1 = array();
$example2 = [];

// Adding items to arrays
$fruits = array("apple","orange","pear");
$fruits2 = ["apple","orange","pear"];

//prints the contents of the array and their positions of the index
print_r($fruits2);
echo '<br/>';




//appending values
$fruits2[] = "peach";
print_r($fruits2);
echo '<br/>';

//accessing array values
echo $fruits2[0];
echo '<br/>';
//prints out the first index of fruits2, in this case apple

//modifying index values
$fruits2[0] = "strawberries";

//associatave arrays similar to objects in JS
$fruits3 = array(
  'strawberry'=> 'red',
  'banana'=> 'yellow'
);

print_r($fruits3);
echo '<br/>';

//Prints item from associative arrays
print_r($fruits3['strawberry']);
echo '<br/>';

?>
