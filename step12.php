<?php


	class create 				
{
	
	final function show()   
	{
		static $x=45;
		$x++;
		echo $x."<br>";
	}

}
class add extends create
{
	function display()
	{
		echo "class is add";
	}
}$x = new add;
$x->show();




?>