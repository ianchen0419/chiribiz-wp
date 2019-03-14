<?php /* Template Name: index */ ?>
<?php get_header();?>
	
	<main id="contact">
		<div class="wrapper-size">
			<div class="center-text">
				<div class="single-news-title-area">
					<h1 class="single-news-title"><?php the_title(); ?></h1>
				</div>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>
			<ol class="contact-path">
				<li>
					<a href="<?php bloginfo('url') ?>">ホーム</a>
				</li>
				<li>
					<a href="../">
						<?php echo get_the_category()[0]->cat_name; ?>
					</a>
				</li>
				<li>
					<a href="javascript:;">
						<?php the_title(); ?>
					</a>
				</li>
			</ol>
			<div class="single-news-date">
				<i class="fa fa-calendar"></i>
				<?php the_time('Y.m.d') ?>
			</div>

			<div class="single-news-content-area">
				<?php if(!empty(get_the_post_thumbnail_url())){ ?>
					<figure class="thumbnail-image">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" width="800" />
					</figure>
						
				<?php }; ?>
				<?php the_content(); ?>
			</div>
		</div>
		<?php endwhile; ?>
		
	</main>

<?php get_footer();?>