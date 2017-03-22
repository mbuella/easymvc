<?php 
	//model.php

	//start session
	session_start();

    $account_dir = json_decode(
    		file_get_contents('../src/data/accounts.json'),
    		true
    	);

	function getAccounts() {
	    return $GLOBALS['account_dir'];
	}

	function getAccount($codename) {
		foreach (getAccounts() as $acc) {
			if ($acc['code_name'] == $codename) {
				return $acc;
			}
		}
		return false;
	}

	function authAccount($codename, $password) {
		//determine if the account exist
		$user = getAccount($codename);
		if ($user) {
			//compare the entered password with
			//that in account
			if ($password == $user['password']) {
				//save username to session
				$_SESSION['user']['code_name'] = $user['code_name'];
				$_SESSION['user']['role'] = 'regular';

				//return success
				return 0;
			}
			else
				return 1;
		}
		else
			return 2;
	}

	function clearAccount() {
		$GLOBAL['account_dir'] = [];
	}

	function signUpAcct($newUser) {
		//check if password match
		if ($newUser['pword'] == $newUser['pword2']) {
		//check if user already exists
			if (!getAccount($newUser['cname'])) {

				//get array of registered users
				$users = getAccounts();
				//open file for writing
				$userFile = fopen('data/accounts.json', 'w');

				//create another array for append
				$user = [
					"code_name" => $newUser["cname"],
					"first_name" => $newUser["fname"],
					"last_name" => $newUser["lname"],
					"address" => $newUser["address"],
					"gender" => $newUser["gender"],
					"password" => $newUser["pword"]
				];
				//add the new user to the users files
				array_push($users, $user);
				//convert userRecord to JSON
				$usersJson = json_encode($users,JSON_PRETTY_PRINT);
				//write JSON string to file
				fwrite($userFile, $usersJson);
				//close file
				fclose($userFile);

				return 0;
			}
			else
				return 1; //Username already exists!
		}
		else
			return 2; //Passwords do not match!
	}

	function signOutAcct() {
		session_destroy();
	}

	function countAccount() {
		return count(getAccounts());
	}

	function displayMessage($message) {	
		switch($message['type']) {
			case 'success':
				$success_msg = $message['text'];
				//include success msg template
			    require_once('messages/alerts/success.php');
			    return $msg;
		    break;

			case 'warning':
				$warning_msg = $message['text'];
				//include warning msg template
			    require_once('messages/alerts/warning.php');
			    return $msg;
		    break;

			case 'error':
				$error_msg = $message['text'];
				//include error msg template
			    //require_once('messages/alerts/error.php');
			    require_once('messages/alerts/error.php');
			    return $msg;
		    break;

		    default:
		    	#
		    break;					
		}			
	}
?>