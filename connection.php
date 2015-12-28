<?php

//create function to easy access
function dbconnection(){


	//put the config.php constants into the variables
	$h=constant("db-host");
	$u=constant("db-username");
	$p=constant("db-password");
	$n=constant("db-name");


	try {
		$conn = new PDO("mysql:host=$h;dbname=$n",$u,$p);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERR_EXCEPTION);
		return $conn;
	}
	//end try
	catch(PDOEXCEPTION $e){
		echo "connection failed".$e->getMessage();
	}
	//end catch

}


?>
