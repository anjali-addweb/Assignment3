<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>
<body>
<?php
function  test($var) //Array Filter Example
  {
  return($var & 1);
  }

$a=array(1,3,2,5,4);
echo "Array Filter" ;
echo "<br>";
print_r(array_filter($a,"test"));

echo "<br>";
echo "<br>";
echo "<br>";

function map($num)//Array Map Example
{
  return($num+$num);
}

$b=array(1,2,3,4,5);
echo "Array Map"; 
echo "<br>";
print_r(array_map("map",$b));

echo "<br>";
echo "<br>";
echo "<br>";

$c = array(
  array(
    'id' => 11,
    'name' => 'anjali',
    'email' => 'anjali@gmail.com',
  ),
  array(
    'id' => 12,
    'name' => 'payal',
    'email' => 'payal@gmail.com',
  ),
  array(
    'id' => 45,
    'name' => 'riya',
    'email' => 'riya@gmail.com',
  )
);

$email = array_column($c, 'email', 'id');
echo "Array Column"; 
echo "<br>";
print_r($email);

?>

</body>
</html>