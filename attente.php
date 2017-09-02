<?php		
session_start();	
?>	
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="jm.spinner.css" rel="stylesheet">
<script src="//code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="jm.spinner.js"></script>
<script>
	$(function() {
		$('#box').jmspinner();
	})
</script>
</head>
<body>
<div id="box" class="box"></div>
</body>
</html>