<?php
include_once "functions.php"; 

if(!logged_in()) redirect();

if(isset($_GET['id']) && !empty($_GET['id'])) {
	if(!delete_like($_GET['id'])) {
		$_SESSION['error'] = 'Не так';
	}
}
redirect();