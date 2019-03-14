<?php /* Template Name: location-passport */ ?>
<?php get_header();?>
	<div id="visual">
		<div class="blue-title">
			<h1>Location Passport</h1>
			<p>住所を自動処理して緯度経度を付与する「ジオコーディング」を実現<br>地理情報システムの入口で必須のパスポート</p>
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
					<a href="location-passport">Location Passport</a>
				</li>
			</ol>
			<?php while(have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</main>
<?php get_footer();?>