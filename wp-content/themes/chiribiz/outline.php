<?php /* Template Name: outline */ ?>
<?php get_header();?>
	<div id="visual">
		<picture> 
			<source media="(max-width: 480px)" srcset="<?php bloginfo('template_directory') ?>/inc/img/company/outline_mobile.png" /> 
			<img src="<?php bloginfo('template_directory') ?>/inc/img/company/outline.png" alt="会社概要" width="100%" /> 
		</picture>
	</div>
	<h1 class="white-title">会社概要</h1>
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
					<a href="outline">会社概要</a>
				</li>
			</ol>
			<?php while(have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</main>
<?php get_footer();?>
