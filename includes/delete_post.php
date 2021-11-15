<?php
include_once "functions.php"; 

if(!logged_in()) redirect();

if(isset($_GET['id']) && !empty($_GET['id']) {
	if(!delete_post($_GET['id'] {
		$_SESSION['error'] = 'Не так!';
	}
}
redirect(get_url('user_posts.php'));