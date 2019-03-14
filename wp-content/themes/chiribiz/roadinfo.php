<?php /* Template Name: roadinfo */ ?>
<?php get_header();?>
	<div id="visual">
		<div class="blue-title">
			<h1>道路開通情報提供サービス</h1>
			<p>道路開通情報を外部調達して、地図調製のコストダウンを。</p>
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
					<a href="roadinfo">道路開通情報提供サービス</a>
				</li>
			</ol>
			<?php while(have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</main>
<?php get_footer();?>
