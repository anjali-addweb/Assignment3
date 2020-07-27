<!DOCTYPE html>
<html>
<head>
	<title>Step 8</title>
</head>
<body>
<?php

$test = [

'title' => 'test Done',

'completed' => true


];
?>

<ul>
	<?php

foreach ($test as $key => $value) {
	echo "<li>$key.$value</li><br>";
}

echo  $test['completed'] ? 'complete' : 'Incomplete';

?>
</ul>

</body>
</html>