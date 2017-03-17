<html>
<body>
<?php 
	//Functions file
	require "functions.php";

	if(isset($_POST['spain'])){
		$message= "The spain function is called.";
		showSpainFlag();
	}
	if(isset($_POST['clear'])){
		$message="The clear function is called.";
		ledmatrix_clear();
	}
	if(isset($_POST['showtext'])){
		showtext($_POST['txt']);
	}
?>


<form  method="post">
	<input type="text" name="txt" value="<?php if(isset($_POST['txt'])){ echo $_POST['txt'];}?>" >
	<input type="submit" name="showtext" value="show text">
	<input type="submit" name="spain" value="Spain">
	<input type="submit" name="clear" value="Clear" >
</form>
