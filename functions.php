<?php
function getTemperature(){
	$command = escapeshellcmd('sudo /home/pi/bin/getTemperature');
	$output = shell_exec($command);
	return $output;
}
function getPressure(){
	$command = escapeshellcmd('sudo /home/pi/bin/getPressure');
	$output = shell_exec($command);
	return $output;
}
function getHumidity(){
	$command = escapeshellcmd('sudo /home/pi/bin/getHumidity');
	$output = shell_exec($command);
	return $output;
}

function showSpainFlag(){
	$command = escapeshellcmd('sudo /home/pi/bin/spain');
	$output = shell_exec($command);
	return $output;
}
function ledmatrix_clear(){
	$command = escapeshellcmd('sudo /home/pi/bin/clear');
	$output = shell_exec($command);
	return $output;
}
function showText($text){
	$command = escapeshellcmd('sudo /home/pi/bin/showtext '.$text);
	$output = shell_exec($command);
	return $output;
}
?>
