<!DOCTYPE html>
<html>
<title>Step4</title>
</head>
<style>
	h1 {
		background: red;
		padding: 2em;
		text-align: center;
	}

</style>
<body>



<h1>
	<?php  

	$name = $_GET['name']; 
	
	echo "Hello $name";

	?>
</h1>
<h2>
	<?= "Hello,".htmlspecialchars($_GET['name']);
	?>
</h2>
	



</body>
</html>