<?php
$current="";
$ans="";
if(!empty($_POST))
{
	$current=$_POST["cppcode"];
	$file="hello.cpp";
	file_put_contents($file, $current);
	putenv("PATH=/usr/bin");
	shell_exec("g++ -o hello hello.cpp");
	$ans=shell_exec("./hello");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Compiler</title>
</head>
<body>
<center><h1>C/C++ Compiler </h1></center>
<center><form method="POST">
	<textarea name="cppcode" class="txtarea" rows="30" cols="150"><?php echo $current; ?></textarea><br><br>
	<input type="submit" value="Run"><br><br>
	<textarea name="cppcode2" disabled class="txtarea" rows="10" cols="100"><?php echo $ans; ?></textarea>
</form>
</center>
</body>
</html>

