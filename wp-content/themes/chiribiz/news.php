<?php /* Template Name: news */ ?>
<?php get_header();?>

	<div id="visual">
		<div class="blue-title">
			<h1>ニュース一覧</h1>	
		</div>
	</div>
	<main id="contact">
		<div class="wrapper-size">
			<ol class="contact-path">
				<li>
					<a href="<?php bloginfo('url') ?>">ホーム</a>
				</li>
				<li class="active">
					<a href="news">ニュース一覧</a>
				</li>
			</ol>
			<ul class="news-area mar_top40">
				<?php
					$args = array(
						'posts_per_page' => -1, // 表示件数の指定
						'category_name' => 'news' // カテゴリーの指定
					);
					$posts = get_posts( $args );
					foreach ( $posts as $post ): // ループの開始
					setup_postdata( $post ); // 記事データの取得
				?>
				<li class="news-item">
					<div class="date"><?php the_time('Y.m.d') ?></div>
					<div class="content">
						<a href="<?php echo get_the_content() ? the_permalink(): "javascript:;"; ?>">
							<span><?php echo mb_strimwidth(get_the_title(), 0, 100, '...'); ?></span>
							<i class="fa fa-angle-right fa-fw"></i>
						</a>
					</div>
				</li>
				<?php
					endforeach; // ループの終了
					wp_reset_postdata(); // 直前のクエリを復元する
				?>	

			</ul>
		</div>
	</main>
	
<?php get_footer();?>