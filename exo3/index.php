<?php
$age = 19;
$gender = 'homme';
if ($age >= 18 )
{
  $age = 'majeur' ;
} else {
 $age = 'mineur';
}
if ($gender != 'homme'){
  $gender = 'une femme';
} else {
  $gender = 'un homme';
}
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
  </head>
  <body>
 <p>
   <?php
    echo 'Vous êtes ' . $gender . ' et vous êtes ' . $age;  
    ?>
 </p>
  </body>
</html>
