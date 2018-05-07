<div class="ui stackable black inverted menu">
	<div class="ui container">
		<a class="<?php if ($filename == 'index.php') echo('active'); ?> item" href="index.php">Home</a>
		<a class="<?php if ($filename == 'textbooks.php') echo('active'); ?> item" href="textbooks.php">Textbooks</a>
		<a class="<?php if ($filename == 'storybooks.php') echo('active'); ?> item" href="storybooks.php">Storybooks</a>
		<a class="<?php if ($filename == 'magazines.php') echo('active'); ?> item" href="magazines.php">Magazines</a>
		<a class="<?php if ($filename == 'comics.php') echo('active'); ?> item" href="comics.php">Comics</a>
		<div class="right menu">
			<div class="ui item right aligned category search">
				<div class="ui icon input">
					<input class="prompt" type="text" placeholder="Search...">
					<i class="circular search link icon"></i>
				</div>
				<div class="results"></div>
			</div>
		</div>
	</div>
</div>
