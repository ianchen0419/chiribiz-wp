<?php /* Template Name: books */ ?>
<?php get_header();?>
	<div id="visual">
		<picture> 
			<source media="(max-width: 480px)" srcset="<?php bloginfo('template_directory') ?>/inc/img/company/books_mobile.png" /> 
			<img src="<?php bloginfo('template_directory') ?>/inc/img/company/books.png" alt="著書紹介" width="100%" /> 
		</picture>
		<h1 class="white-title">著書紹介</h1>
	</div>
	<main id="contact">
		<div class="wrapper-size">
			<ol class="contact-path">
				<li>
					<a href="<?php bloginfo('url') ?>">ホーム</a>
				</li>
				<li>
					<a href="company">会社案内</a>
				</li>
				<li class="active">
					<a href="books">著書紹介</a>
				</li>
			</ol>
			<?php while(have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</main>
<?php get_footer();?>