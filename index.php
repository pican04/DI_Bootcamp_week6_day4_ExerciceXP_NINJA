<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXP_NINJA</title>
</head>
<body>
<h1>Union Of Two Arrays</h1>
  <!--Write a PHP function to set union of two arrays-->  
<?php
function array_union($x, $y)
   { 
    //use array_merge()
      $union=  array_merge(
            // use array_intersect()
            array_intersect($x, $y),
            // use array_did()
            array_diff($x, $y),     
            array_diff($y, $x)      
        );
        return $union;
   }
$tab1 = array(1, 2, 3, 4,5);
$tab2 = array(2, 3, 4, 5, 6,7,8);

print_r(array_union($tab1, $tab));
?>

    
</body>
</html>