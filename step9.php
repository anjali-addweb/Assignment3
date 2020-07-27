<!DOCTYPE html>
<html>
<head>
	<title>Step 8</title>
</head>
<body>
<?php

$test = [

'title' => 'Test Done',

'completed' => true


];
?>

<ul>
	<b>status : </b>
	<?php


if($test['completed'])
{
	echo "&#9989";
} else 
{
	echo "incomlete";
}
?>

<?php if($test['completed']) : ?>
<span class="icon">&#9989;</span>
<?php endif ?>
</ul>

</body>
</html>