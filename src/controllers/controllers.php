<?php
// controllers.php
	function home_action() {
		require_once('../src/views/home.php');
	}

	function user_action() {
		if (isset($_SESSION['user'])) {
	    	$account = getAccount($_SESSION['user']['code_name']);
	    	require_once('../src/views/info.php');
		}
		else {
			//send a not allowed header
	    	header('HTTP/1.1 401 Unauthorized');
	    	//display error 401 custom message
	    	require_once('../src/messages/http/error_401.php');
		}
	}

	function count_action() {
	    $count = countAccount();
	    require_once('../src/views/count.php') ;
	}

	function signin_action() {
		$msg = ""; //default message (success)
		$cname = "";
		if (isset($_POST['signin'])) {
			$cname = $_POST['signin_cname'];
			//set msg
			$si_return = authAccount($_POST['signin_cname'], $_POST['signin_pword']);

			switch ($si_return) {
				case 0: //success signin
					//redirect to user page
					header("Location: user");
				case 1: //invalid password
					//call displayMessage
					$msg = displayMessage([
						'type' => 'error',
						'text' => 'Invalid password!'
					]);
				break;
				
				case 2: //account not found
					//call displayMessage
					$msg = displayMessage([
						'type' => 'warning',
						'text' => 'Account not found!'
					]);
				break;

				default:
					# code...
				break;
			}
		}
		//display any message from previous transactions
		if (isset($_SESSION['message'])) {
			echo displayMessage($_SESSION['message']);
			//delete the message from the system
			unset($_SESSION['message']);
		}

	    require_once('../src/views/signin.php');
	}

	function signup_action () {
		$msg = "";
		$newUser = [
			"fname" => "",
			"lname" => "",
			"address" => "",
			"gender" => "",
			"cname" => ""
			];

    	if (isset($_POST['signup'])) {
    		//call the model function signUpAcct
    		//with the POST array as the parameter
    		$msg = "";
			$newUser = $_POST['signup'];
    		$su_return = signUpAcct($_POST['signup']);

    		//unset the POST data
    		unset($_POST['signup']);

    		switch ($su_return) {
    			case 0: //success signup
    				//set session message success
    				$_SESSION['message'] = 
    					[
    						"type" => "success",
    						"text" => "You can now use your credentials to sign in."
						];

    				//redirect to signin page
					header("Location: signin");
				break;
    			
    			case 1: //username already exists
					//call displayMessage
					$msg = displayMessage([
						'type' => 'warning',
						'text' => 'Username already exists!'
					]);
				break;

    			case 2: //passwords do not match
					$msg = displayMessage([
						'type' => 'error',
						'text' => 'Passwords do not match!'
					]);
				break;
    				
    			default:
    				# code...
				break;
    		}
    	}
		require_once('../src/views/signup.php');
	}

	function signout_action() {
		//unset all session data
		signOutAcct();
		//redirect to signin page
		header("Location: signin");
	}
?>
