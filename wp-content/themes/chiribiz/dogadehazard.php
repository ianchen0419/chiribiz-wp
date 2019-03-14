<?php /* Template Name: dogadehazard */ ?>
<?php get_header();?>
	<div id="visual">
		<div class="blue-title">
			<h1>動画で理解！わが家のハザードマップ</h1>
			<p class="catch-copy">地図が読めなくても防災リスクが理解できる、次世代のハザードマップ</p>
		</div>
	</div>
	<main id="contact">
		<div class="wrapper-size">
			<ol class="contact-path">
				<li>
					<a href="<?php bloginfo('url') ?>">ホーム</a>
				</li>
				<li>
					<a href="products">製品 / サービス</a>
				</li>
				<li class="active">
					<a href="dogadehazard">動画で理解！わが家のハザードマップ</a>
				</li>
			</ol>
			<?php while(have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</main>
<?php get_footer();?>
