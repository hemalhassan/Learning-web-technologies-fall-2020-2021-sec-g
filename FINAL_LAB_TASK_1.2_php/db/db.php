<?php

	$location 	= 'localhost';
	$dbuser		= 'root';
	$dbpass		= '';
	$database	= 'webtechlabtask'; 

	function getConnection(){
		
		global $location;
		global $dbuser;
		global $dbpass;
		global $database;

		$conn = mysqli_connect($location, $dbuser, $dbpass, $database);
		return $conn;
	}



	function retrieveUser($name)
	{
		$conn = getConnection();
	    $sql = "select * from admin where name='".$name."'";
        $result = mysqli_query($conn, $sql);
        
        $userData = mysqli_fetch_assoc($result);

        $_SESSION["Employeename"] = $userData["Employeename"];
        $_SESSION["company name"] = $userData["companyname"];
        $_SESSION["contact no"] = $userData["contactno"];
        $_SESSION["user name"] = $userData["username"];
        $_SESSION["password"] = $userData["password"];
	}



	function freeUserSession()
	{
		unset($_SESSION["Employeename"]);
		unset($_SESSION["companyname"]);
		unset($_SESSION["contactno"]);
		unset($_SESSION["username"]);
		unset($_SESSION["password"]);
	}

?>