<?php

class firstForm{

	public $name;
	public $email;
	public $con;
 
    function one(){

	if(isset($_POST['btn'])){
		 $name = $_POST['name'];
		$email = $_POST['email'];
		$con = $_POST['phn'];


		return array($name,$email,$con);


		}
	}




}

?>
