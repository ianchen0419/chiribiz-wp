<?php /* Template Name: message */ ?>
<?php get_header();?>
	<div id="visual">
		<picture> 
			<source media="(max-width: 480px)" srcset="<?php bloginfo('template_directory') ?>/inc/img/company/message_mobile.png" /> 
			<img src="<?php bloginfo('template_directory') ?>/inc/img/company/message.png" alt="代表挨拶" width="100%" /> 
		</picture>
	</div>
	<h1 class="white-title">代表挨拶</h1>
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
					<a href="message">代表挨拶</a>
				</li>
			</ol>
			<?php while(have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</main>
<?php get_footer();?>