<!DOCTYPE html>
<html>
<body>

<?php
    print "<h4> Array Exercise 1 </h4>";

$weather = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind"); 
echo  $weather[0] . ", " . $weather[1] . ", " . $weather[2] . ", " . $weather[3] . ", " . $weather[4] . ", " . $weather[5] . ", " . $weather[6] ."<br>" . "<br>";

echo "At the beginning of the month, we had " . $weather[5] . " and ". $weather[6] . " .  Then came " . $weather[1] . " with a few " . $weather[2] . " and some " . $weather[0] . " . At least we didn't get any " . $weather[3] . " or " . $weather[4] . " . " . " <br> " . " <br> ";

    print "<h4> Array Exercise 2</h4>";

$cities = array ("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

echo $cities[0] . ", " . $cities[1] . ", " . $cities[2] . ", " . $cities[3] . ", " . $cities[4] . ", " . $cities[5] . ", " . $cities[6] . ", " . $cities[7] . ", " . $cities[8] . ", " . $cities[9] . " . " . " <br> " . " <br> ";

$citysort = sort($cities);
$clength = count($cities);

echo "<ul>";
for($x = 0; $x < $clength; $x++) {
  echo "<li>".$cities[$x]."</li>";
  echo "</ul>";
}

$cities2 = array ("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London", "Los Angeles", "Calcutta", "Osaka", "Beijing");

$citysort2 = sort($cities2);
$clength2 = count($cities2);

echo "<ul>";
for($x = 0; $x < $clength2; $x++) {
  echo "<li>".$cities2[$x]."</li>";
  echo "</ul>";
}

?>

</body>
</html>