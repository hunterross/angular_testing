<?php 

error_reporting(1);

class my_class
{
	private $my_var;

	function my_class ($var)
	{
		$this->my_var = $var;
	}
}

class my_class2
{
	public $my_var;

	function my_class ($var)
	{
		$this->my_var = $var;
	}
}

$obj = new my_class ("something");

$obj2 = new my_class2($obj);
echo $obj2->my_var;
