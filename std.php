<?php
/**
* 
*/
class Student 

{
	var $sid;
	var $sname
	
	function __construct()
	{
		echo "<h1>hi</h1>";

	}
	function setData($id,$name)
	{
		$this->sid = $id;
		$this->sname =$name;
	}
	function getData()

	{
		echo "<br>" , $this->sid;
	echo "<br>" , $this->sname;
	}
	function __destruct()
	{
		echo "<h1>bye</h1>";
	}
}
$s1=new Student;
$s1->sid =100;
$s1->sname="JK"
echo "<br>" , $s1->sid;
echo "<br>" , $s1->sname;
echo "<br";
$s1->setData(200,"Test Name");
$s1->getData();
?>
