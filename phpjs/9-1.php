<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<h1>javascript</h1>
	<ul>
		<script>
			for(i=0;i<4; i++) 
				document.write("<li>hello"+i+"</li>")
		</script>
	</ul>
	<h1>php</h1>
	<ul>
		<?php 
		for($i=0; $i<4; $i++) 
		echo "<li>hello".($i+1)."</li>";
		?>
	</ul>
</body>
</html>