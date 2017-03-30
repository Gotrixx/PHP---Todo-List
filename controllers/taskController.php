<?php 
function index() {
	include 'models/taskModel.php';
	$id = $_SESSION['user']['id']; //il faut le traiter comme un objet.
	$tasks = getAllTasks($id);
	return ['view' => 'indextasks.php', 'tasks' => $tasks];
};