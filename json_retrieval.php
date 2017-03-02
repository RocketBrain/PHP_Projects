<?php
//Using php to retrieve a json API


//stores content of json file into data

$data2 = file_get_contents('http://mysafeinfo.com/api/data?list=englishmonarchs&format=json');

$data = file_get_contents('https://www.codeschool.com/users/RocketBrain.json');


//retrieves data as associate arrays rather than objects with json_decode
$json_data = json_decode($data,true);

//var_dump($json_data['courses']['completed']);

$courses = $json_data['courses']['completed'];


$json_data2 = json_decode($data2,true);

$addresses = $json_data2;
//var_dump($addresses);

//var_dump($json_data2);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Picks out the username out of associative array -->
    <title><?php echo $json_data['user']['username']; ?> Badges</title>
  </head>

  <style>
  img {
    height: 150px;
    width: 150px;
  }
  </style>

  <body>
    <?php
    foreach($addresses as $index){
      var_dump($addresses[0]["cty"]);
    }
    foreach ($courses as $course) {
      echo '<div>';
      echo '<img src="' . $course['badge']. '">';
      echo '<a href="' . $course["url"] .  '">' . $course["title"] . '</a>';
      echo '</div>';
    }
    ?>

  </body>
</html>
