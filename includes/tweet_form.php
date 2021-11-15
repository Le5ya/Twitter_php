		<section class="wrapper">
			<form class="tweet-form" action="<?php acho get_url('includes/add_post.php'); ?>"
				method="post">
				<div class="tweet-form__wrapper">
					<img class="avatar" src="<?php echo get_url($_SERVER['user']['avatar']); ?>" alt="Аватар">
					<textarea class="tweet-form__text" rows="4" placeholder="Что происходит?" name="text"required></textarea>
				</div>
				<div class="tweet-form__btns">
					<button class="tweet-img__btn" type="button"></button>
					<span id="image-span"><image src="https://static.wikia.nocookie.net/dayr/images/b/b8/%D0%93%D0%BE%D1%80%D1%8B.png/revision/latest?cb=20200125122904&path-prefix=ru"></span>
					<input type="hidden" id="image-path" name="image">
					<button class="tweet-form__btn" type="submit">Твитнуть</button>
				</div>
			</form>
		</section>