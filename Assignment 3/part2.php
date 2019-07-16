<!DOCTYPE html>
<html lang="en">
<head>
<title> Part 2 - CheckerBoard</title>
<style>
table, th, td {
 width: 300px;
 border:1px;
}

.cell1{
background-color:black;
width:35px ;
height:35px;
}

.cell2{
background-color:red ;
width:35px ;
height:35px;
}
</style>
</head>

<body>
<table cellspacing="1px" cellpadding="1px">
<?php
    for($i=1;$i<=5;$i++)
    {
         echo "<tr>";
         
		 for($j=1;$j<=5;$j++)
         {  
         $sum=$i+$j;
         if($sum%2!=0)
         {
         echo '<td class="cell1"></td>';
         }
         else
         {
		 echo '<td class="cell2"></td>';
         }
		 
         }
         
		 echo "</tr>";	 
	}  
?>
</table>

</body>
</html>