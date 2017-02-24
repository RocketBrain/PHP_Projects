
<?php
$year = 2017;
$model = array(
  'year' => 1998,
  'model_2' => array(
    2000,
  )
);
//computations can be carried out within arrays such as this:
print_r($year - $model['year'] - $model['model_2'][0]);

//though extensive computations may be better suited inside of separate array variables
?>
