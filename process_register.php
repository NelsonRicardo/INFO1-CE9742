<?php
//put the user name that user entered into a variable called $username
$username = trim($_REQUEST['username']);
//put the password that user entered into a variable called $password
$password = trim($_REQUEST['password']);
//check for empty values
if(empty($username) || empty($password)){
    header("Location:register.php?err=1");
}
//else process
else{
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
	
    $match = false;
    if(!empty($infos)){
        foreach($infos as $info){
            if(trim($info[username]) == $username){    
                //if they both match, set variable to true
                $match = true;
            }
        }
    }

    if($match != true){
        //connect to database
        $cxn = @ConnectToDb($dbServer, $dbUser, $dbPass, $dbName);

        //append data
        $q = "INSERT INTO neri_users (username, password) VALUES ('{$username}', '{$password}')";
            
        $result = mysql_query($q);

        //close database connection
        $cxn = @DisconnectFromDb();

        include('includes/process_session.php');

        	//redirect to the main page
        	header("Location: index.php");
    }
    else{
        //send back to register page with error flag 2 - no match
        header("Location: register.php?err=2");
    }//end else
}//end else
?>