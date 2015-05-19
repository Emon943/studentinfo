<?php

$link = mysql_connect("localhost", "root", "root123");
mysql_select_db("student1", $link);

/*********************************  Add Student Info  ************************************/
	
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$stdroll = $_POST["stdroll"];
		$address= $_POST["address"];
		$email = $_POST["email"];
		$sex = $_POST["sex"];
		$c1 = $_POST["c1"];
		$c2 = $_POST["c2"];
		$dept=$_POST["dept"];
		$session = $_POST["session"];
		$submark=$_POST["submark"];
		
		
	
		if( !empty($firstname) ){
			$query = "INSERT INTO information
					  SET first_name = '{$firstname}',
					  	  last_name = '{$lastname}',
						  stdroll = '{$stdroll}',
					  	  address = '{$address}',
						  email = '{$email}',
						  sex = '{$sex}',
						  optional_1 = '{$c1}',
						  optional_2 = '{$c2}',
						  dept = '{$dept}',
						  session = '{$session}',
						  submark='{$submark}'";
		
			$result = mysql_query($query, $link) or die( "Error in insertion: ".mysql_error());
			echo "<script>window.alert('Added succsessfully');</script>";
			echo "<script>window.location='home.php';</script>";
		}
		echo "<script>window.location='home.php';</script>";
	?>