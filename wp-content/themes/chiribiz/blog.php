<?php /* Template Name: blog */ ?>
<?php get_header();?>
	<div id="visual">
		<div class="blue-title">
			<h1>ブログ</h1>	
		</div>
	</div>
	<main id="contact">
		<div class="wrapper-size">
			<ol class="contact-path">
				<li>
					<a href="<?php bloginfo('url') ?>">ホーム</a>
				</li>
				<li class="active">
					<a href="blog">ブログ</a>
				</li>
			</ol>
			<?php
				$args = array(
				'posts_per_page' => -1, // 表示件数の指定
				'category_name' => 'blog' // カテゴリーの指定
				);
				$posts = get_posts( $args );
				foreach ( $posts as $post ): // ループの開始
				setup_postdata( $post ); // 記事データの取得
			?>
			<div class="blog-item">
				<div class="blog-image" style="background: url(<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : 'http://localhost/chiribiz/wp-content/uploads/blog-logo.png'; ?>);"></div>
				
				<div class="blog-content">
					<h4>
						<a href="<?php echo the_permalink() ?>"><?php echo mb_strimwidth(get_the_title(), 0, 45, '...'); ?></a>
					</h4>
					<div class="date"><?php the_time('Y.m.d') ?></div>
					<p><?php echo mb_strimwidth(wp_strip_all_tags(get_the_content()), 0, 100, '...'); ?></p>
					<div class="button-area">
						<a href="<?php echo the_permalink() ?>" class="blue-button">続きを読む</a>
					</div>
				</div>
			</div>
			<?php
				endforeach; // ループの終了
				wp_reset_postdata(); // 直前のクエリを復元する
			?>
			<!-- <div class="blog-item">
				<img src="inc/img/blog/blog-logo.png" alt="Thumbnail画像がない記事です。" width="400" />
				<div class="blog-content">
					<h4>
						<a href="javascript:;">Thumbnail画像がない記事です。</a>
					</h4>
					<div class="date">2019.02.02</div>
					<p>Thumbnail画像がないとこうやってログ画像が出でしまうです。文章文章文章文章文章文章文章文章</p>
					<div class="button-area">
						<a href="javascript:;" class="blue-button">続きを読む</a>
					</div>
				</div>
			</div>
			<div class="blog-item">
				<img src="inc/img/blog/blog-newyear.png" alt="あけましておめでとうございます" width="400" />
				<div class="blog-content">
					<h4>
						<a href="javascript:;">あけましておめでとうございます</a>
					</h4>
					<div class="date">2019.01.01</div>
					<p>2019年も、よろしくお願いします。文章文章文章文章文章文章文章文章</p>
					<div class="button-area">
						<a href="javascript:;" class="blue-button">続きを読む</a>
					</div>
				</div>
			</div> -->
			
		</div>

	</main>
<?php get_footer();?>