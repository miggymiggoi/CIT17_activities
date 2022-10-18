<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php 

    print "<h4> PHP Exercise 5 </h4>";

        $around = "around";

        echo 'What goes '  . $around  . ', comes '   . $around . '.' . "<br>" . "<br>"; 
    
    ?>

    <?php 
    print "<h4> PHP Exercise 6 </h4>";

    for($i = 1; $i <= 1; $i++){
        echo "<tr>";

        for ($j = 1; $j <= 12; $j++){
            echo "<td>$i * $j = ". $i * $j ."</br>";
            
  }
  echo "</tr>";
  }
    
    ?>

<?php

print "<h4> Exercise 7 </h4>";
echo "<table>" ;

for ($i = 1; $i <= 7; $i++) {
    echo "<tr>"; 
  
    for($j = 1; $j <= 7; $j++){
        echo "<td>" . $i * $j . "</td>"; 
    }
    echo "</tr>";
}
echo "</table>";
?>  
    
</body>
</html>