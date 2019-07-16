<?php

isBitten();

function isBitten()
{
	$x = rand(0,100);
	
	echo " Randomly generated number is $x.";
	echo "<br>";
	echo "<br>";
	
	if ( $x >= 50 )
	{
	echo "Charlie ate my lunch!";
	echo "<br>";
	}
	else
	{
	 echo "Charlie did not eat my lunch!";
	 echo "<br>";
    }		
}	
?>