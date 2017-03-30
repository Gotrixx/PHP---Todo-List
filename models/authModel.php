<?php
function checkUser( $email, $password ){
	$pdo = connectDB();
	if ($pdo) {
		try {
			$pdoSt = $pdo -> prepare('SELECT * FROM users WHERE email = :email AND password = :password');
			$pdoSt -> execute([':email' => $email, ':password' => $password,]);
            return $pdoSt->fetch();
		} catch (PDOException $e) {
            return '';
        }
    } else {
        die('Quelque chose a posé problème lors de l’enregistrement');
    }
}