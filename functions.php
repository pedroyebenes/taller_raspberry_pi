<?php
function getTemperature(){
	$command = escapeshellcmd('sudo /home/pi/bin/getTemperature.py');
	$output = shell_exec($command);
	return $output;
}
function getPressure(){
	$command = escapeshellcmd('sudo /home/pi/bin/getPressure.py');
	$output = shell_exec($command);
	return $output;
}
function getHumidity(){
	$command = escapeshellcmd('sudo /home/pi/bin/getHumidity.py');
	$output = shell_exec($command);
	return $output;
}
function showSpainFlag(){
	$command = escapeshellcmd('sudo /home/pi/bin/spain.py');
	$output = shell_exec($command);
	return $output;
}
function ledmatrix_clear(){
	$command = escapeshellcmd('sudo /home/pi/bin/clear.py');
	$output = shell_exec($command);
	return $output;
}
function showText($text){
	//$command = escapeshellcmd('sudo /home/pi/bin/showtext.py '.$text);
	$command = 'sudo /home/pi/bin/showtext.py '.$text;
	$output = shell_exec($command);
	return $output;
}
?>
