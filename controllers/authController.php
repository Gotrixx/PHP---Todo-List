<?php

function getLogin(){
	return ['view' => 'views/authgetLogin.php'];
};

function postLogin(){
	include 'models/authmodel.php';
	
	$email = $_POST['email'];
	$password = sha1($_POST['password']);

	if ($user = checkUser( $email, $password )) {
		$_SESSION['user'] = $user;
		header('Location: http://localhost/exam2016/index.php?a=index&r=task');//La route qui liste les tâches
		exit;
	}

};