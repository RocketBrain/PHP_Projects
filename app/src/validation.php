<?php
//use allows us to use which classes we need
use Respect\Validation\Validator;
use Respect\Validation\Exceptions\NestedValidationException;

//creates new object based off validator classes

$v = new Validator;
// var_dump($v);


function validate_date($date_string){
$date_validator = Validator::date()->notEmpty();
//:: allows you to access classes methods and properties without new object. This is a static call.
//after accesing the notEmpty() method, another method called validate is used on the parameter.
//validate tests our data against the notEmpty() method.
//we can chain together methods using -> to make the conditional more manageable.

//using try with custom exception provided by Validation package
  try{
    $date_validator->assert($date_string);
    $date_time = strtotime($date_string);
    return date('F jS Y', $date_time);
  }
catch (NestedValidationException $e) {
return $e->getMessages();
}
}
?>
