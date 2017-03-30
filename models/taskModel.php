<?php 
function getAllTasks($id) {
	$pdo = connectDB();
	if ($pdo) {
		try {
			$pdoSt = $pdo -> prepare('SELECT * FROM tasks WHERE id = :id');
			$pdoSt -> execute([':id' => $id,]);
            return $pdoSt->fetch();
		} catch (PDOException $e) {
            return '';
        }
    } else {
        die('Quelque chose a posé problème lors de l’enregistrement');
    }
};