<?php
require('includes/config.php');



if (!empty($_POST)) {
	// $msg = "";
	// $captcha = $_POST["g-recaptcha-response"];
	// $secretkey = "6LeSOn4bAAAAAN2Pk77y8tJc5i_LmPZG2xljPIUU";
	// $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urldecode($secretkey) . '&response=' . urlencode($captcha) . '';
	// $response = file_get_contents($url);
	// $responsekey = json_decode($response, TRUE);

	// if ($responsekey['success'] == false) {
	// 	$msg .= "<li>Please fill captcha";
	// }

	if (empty($_POST['fnm']) || empty($_POST['unm']) || empty($_POST['gender']) || empty($_POST['pwd']) || empty($_POST['cpwd']) || empty($_POST['mail']) || empty($_POST['city'])) {
		$msg .= "<li>Please full fill all requirement";
	}

	if ($_POST['pwd'] != $_POST['cpwd']) {
		$msg .= "<li>Password Mismatch! Please Enter your Password Again.....";
	}

	// if(!preg_match("^[a-z0-9_]+[a-z0-9_.]*@[a-z0-9_-]+[a-z0-9_.-]*\.[a-z]{2,5}$",$_POST['mail']))
	// {
	// 	$msg.="<li>Please Enter Your Valid Email Address...";
	// }

	



	if (strlen($_POST['pwd']) > 10) {
		$msg .= "<li>Please Enter Your Password in limited Format....";
	}

	if (is_numeric($_POST['fnm'])) {
		$msg .= "<li>Name must be in String Format...";
	}

	if ($msg != "") {
		header("location:register.php?error=" . $msg);
	} else {
		$fnm = $_POST['fnm'];
		$unm = $_POST['unm'];
		$pwd = $_POST['pwd'];
		$gender = $_POST['gender'];
		$email = $_POST['mail'];
		$contact = $_POST['contact'];
		$city = $_POST['city'];





		$query = "insert into user(u_fnm,u_unm,u_pwd,u_gender,u_email,u_contact,u_city)
			values('$fnm','$unm','$pwd','$gender','$email','$contact','$city')";

		mysqli_query($conn, $query) or die("Can't Execute Query...");
		header("location:register.php?ok=1");
	}
} else {
	header("location:index.php");
}