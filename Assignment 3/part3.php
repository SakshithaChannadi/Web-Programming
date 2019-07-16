<?php
$month = array ('January', 'February', 'March', 'April','May', 'June', 'July', 'August','September', 'October', 'November', 'December');

echo "<b>Using for statement to display the months</b>";
echo "<br>";
for ($i = 0; $i < 12 ; $i++){
	echo $month[$i];
    echo "<br>";	
}

echo "<br>";
echo "<br>";

echo "<b>Using for statement to sort the months in alphabetical order</b>";
echo "<br>";
sort($month);

for ($j = 0; $j < 12 ; $j++){
	echo $month[$j];
    echo "<br>";
}

echo "<br>";
echo "<br>";

$months = array ('January', 'February', 'March', 'April','May', 'June', 'July', 'August','September', 'October', 'November', 'December');

echo "<b>Using foreach statement to display the months</b>";
echo "<br>";
foreach ($months as $key)
{
	echo "$key";
    echo "<br>";
}
echo "<br>";
echo "<br>";

echo "<b>Using foreach statement to sort the months in alphabetical order</b>";
echo "<br>";
sort($months);
foreach ($months as $key2)
{
	echo "$key2";
    echo "<br>";
}
?>