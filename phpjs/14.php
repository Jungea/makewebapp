<?php 
$conn = mysqli_connect("localhost","root","123qwe");
mysqli_select_db($conn, "opentutorials");
$sql = "SELECT * FROM user WHERE name = '".$_GET['name']."' AND password = '".$_GET['password']."'";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	if($result->num_rows == "0"){
		echo "뉘신지?";
	} else {
		echo "안녕하세요. 주인님";
	}
	?>
</body>
</html>