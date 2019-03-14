<?php /* Template Name: asahiru */ ?>
<?php get_header();?>
	<div id="visual">
		<div class="blue-title">
			<h1>あさひる統計®</h1>
			<p class="catch-copy">その街の今がわかる。ビッグデータから得られた時間帯別推計流動人口統計</p>
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
					<a href="asahiru">あさひる統計</a>
				</li>
			</ol>
			<?php while(have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</main>
<?php get_footer();?>
