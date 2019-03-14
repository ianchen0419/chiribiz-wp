<?php /* Template Name: faq */ ?>
<?php get_header();?>
	<div id="visual">
		<div class="blue-title">
			<h1>未来商圏レポートFAQ</h1>
		</div>
	</div>
	<main id="contact">
		<div class="wrapper-size">
			<ol class="contact-path">
				<li>
					<a href="<?php bloginfo('url') ?>">ホーム</a>
				</li>
				<li>
					<a href="../products">製品 / サービス</a>
				</li>
				<li>
					<a href="../miraishoken">未来商圏レポート</a>
				</li>
				<li class="active">
					<a href="faq">未来商圏レポートFAQ</a>
				</li>
			</ol>
			<?php while(have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</main>
<?php get_footer();?>