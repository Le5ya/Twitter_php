<?php
include_once "functions.php"; 

if(!logged_in()) redirect();

if(isset($_POST['text']) && !empty($_POST['text']) &&($_POST['image'])) {
	if(!add_post($_POST['text'], $_POST['image'])) {
		$_SESSION['error'] = 'Вы пытаетесь отправить пустое сообщение';
	}
}
redirect(get_url('user_posts.php'));