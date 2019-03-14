<?php /* Template Name: miraitoukei */ ?>
<?php get_header();?>
	<div id="visual">
		<div class="blue-title">
			<h1>未来統計®</h1>
			<p class="catch-copy">未来のビジネス分析には、未来の人口指標を。</p>
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
					<a href="miraitoukei">未来統計</a>
				</li>
			</ol>
			<?php while(have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</main>
<?php get_footer();?>