
<?php
//Loops
$i = 1;
while ( $i <= 12){
  $value = $i * 12;
  $i ++;
  }
?>


<?php
$data = array(

  '1'=> 600000,
  '2' => 700000,
);

$meteors2 = array(

  'Campo Del Cielo',
  'Canyon Diablo',
);

foreach($meteors2 as $key) {
  echo "$key <br>";
}

"<br>";

foreach ($data as $key => $value) {
  echo "$key represents $value <br>";
}

 ?>
