<?php
//use allows us to use which classes we need
use Respect\Validation\Validator;

//creates new object based off validator classes

$v = new Validator;
// var_dump($v);

function validate_date($date_string){

//:: allows you to access classes methods and properties without new object. This is a static call.
//after accesing the notEmpty() method, another method called validate is used on the parameter.
//validate tests our data against the notEmpty() method.
//we can chain together methods using -> to make the conditional more manageable.
  if(Validator::notEmpty()->validate($date_string)){
    return date('m/d/y', $date_string);
  }
else {
return $date_string . 'Is not Valid. Please put in the date in mm/dd/yyyy format.';
}
}
?>
