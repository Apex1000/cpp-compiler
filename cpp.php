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
<form method="POST">
	<textarea name="cppcode" class="txtarea"><?php echo $current; ?></textarea>
	<input type="submit" value="Run">
	<textarea name="cppcode2" disabled class="txtarea"><?php echo $ans; ?></textarea>
</form>