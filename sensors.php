<html>
<head>
 <title>
Sense Hat Sensors
 </title>
</head>

<body>
<?php
	//Functions file
	require "functions.php";
?>

<h1>
Sense Hat Sensors 
</h1>

<table>
<tr>
 <th scope="col">Temperature</th>
 <td scope="col">
<?php
	print getTemperature()." degrees Celsius";
?>
 </td>
</tr>
<tr>
 <th scope="col">Pressure</th>
 <td scope="col">
<?php
	print getPressure()." millibars";
?>
 </td>
</tr>
<tr>
 <th scope="col">Relative humidity</th>
 <td scope="col">
<?php
	print(getHumidity());
?>
 </td>
</tr>
</table>

</body>
</html>
