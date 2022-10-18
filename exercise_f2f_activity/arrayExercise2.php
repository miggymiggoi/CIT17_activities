<!DOCTYPE html>
<html>
<body>

<?php
function Duplicate($a){
    return(array_count_values($a));
}
    print "<h4>Duplicate elements in an array.  </h4>";
$a = array("5", "1", "1");
	print_r(Duplicate($a));
		echo "<br>";
        
$duplicate = print_r(array_count_values($a));
		echo "<br> Total number of duplicate elements found in the array is :" . Duplicate($a);
        

    print "<h4>Frequency of each element of an array.  </h4>";
$b = array("25 ", "12", "43");
	print_r($b);
		echo "<br>";
$duplicate = print_r(array_count_values($b));
        echo "<br>";
        
$list = count($b);
for ($i = 0; $i < $list; $i++) {
  echo "$b[$i] " . " occurs " . $duplicate . " times." . "<br>";
}


?>

</body>
</html>