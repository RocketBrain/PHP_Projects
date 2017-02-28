<!-- Multi-dimensional arrays -->
<?php
//array contained within an array

$parts = array(
  'computer'=> array(
    'case',
    'fans',
    'motherboard'=> array(
      'CPU',
      'RAM',
      'PCI',
    ),
  ),
  'car'=> array(
    'motor',
    'exhaust',
    'transmission',
  ),
);

//prints out the computer array inside of the $parts array
print_r($parts['computer']);
echo "<br>";

//prints out the first item inside of computer
print_r($parts['computer'][0]);
echo "<br>";

//prints out the first item inside of motherboard
print_r($parts['computer']['motherboard'][0]);
echo "<br>";

//prints out the second array inside of $parts
print_r($parts['car']);
echo "<br>";

//counts the amount of arrays inside of $parts
echo count($parts);


//example of using an array inside of the html itself.
$cities = array(
'tokyo' => array(
13.6,
  1869,
  'Japan',
),
  'dc' => array(
  0.6,
    1790,
    'United States',
  ),
  'moscow' => array(
  11.5,
    1147,
    'Russia'
  ),

);

?>
<ul>
<li>Population: <?php  echo $cities['tokyo'][0] . " million in Tokyo."?></li>
</ul>
