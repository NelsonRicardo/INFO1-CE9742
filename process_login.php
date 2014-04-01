<?php
require_once("Sanitize.class.php");
//set the $flags variable to be the sum of all the flags you want to use from the list above
$flags = Sanitize::HTML + Sanitize::SQL; //this example removes any HTML or SQL commands from the string

//now pass the data and the $flags variable to the sanitize function to sanitize it
$username = Sanitize::sanitize($_REQUEST['username'], $flags); //call the static method "sanitize of the Sanitize class
$password = Sanitize::sanitize($_REQUEST['password'], $flags); //call the static method "sanitize of the Sanitize class

//check for empty values
if(empty($username) || empty($password)){
        header('Location: ' . strtok($_SERVER['HTTP_REFERER'], '?') . '?err=1');
}else{
//else process

	//get database connection file
	require_once ('db.php');

	//connect to database
	$cxn = @ConnectToDb($dbServer, $dbUser, $dbPass, $dbName);

	//DATABASE SELECT
	$q = "SELECT * FROM neri_users";
			
	$result = mysql_query($q);

	if($result) {
		$infos = array();
		
		while($row = mysql_fetch_array($result)) {
			$infos[] = $row;
		}
	}

	//close database connection
	$cxn = @DisconnectFromDb();

    //set value for variable $match to false
    $match = false;
    if(!empty($infos)){
        foreach($infos as $info){
            if(trim($info[username]) == $username && trim($info[password]) == $password){    
                //if they both match, set variable to true
                $match = true;
            }
        }
    }
    if($match == true){

include('includes/process_session.php');

        //redirect to the main page
        header('Location: ' . strtok($_SERVER['HTTP_REFERER'], '?'));
    }
    else{
        //send back to login page with error flag 2 - no match
        header('Location: ' . strtok($_SERVER['HTTP_REFERER'], '?') . '?err=2');
    }
}//end else
?>