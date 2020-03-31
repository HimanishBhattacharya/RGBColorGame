<html>

<head></head>
<body>
<?php

	$user=array($_POST["name"],$_POST["phone"]);
	$file = file_get_contents('Players.txt');
	
	$myfile = fopen("Players.txt", "a") or die("Unable to open file!");
	$info="Contact: \nName: ".$user[0]." \nPhone: ".$user[1]." \n.........\n\n";
	fwrite($myfile, $info);
	fclose($myfile);
	header('Location:index.html');
	
?>
</body>
</html>