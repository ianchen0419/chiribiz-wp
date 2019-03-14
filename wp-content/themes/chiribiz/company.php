<?php /* Template Name: company */ ?>
<?php get_header();?>
	<div id="visual">
		<picture> 
			<source media="(max-width: 480px)" srcset="<?php bloginfo('template_directory') ?>/inc/img/company/company_mobile.png" /> 
			<img src="<?php bloginfo('template_directory') ?>/inc/img/company/company.png" alt="会社案内" width="100%" /> 
		</picture>
	</div>
	<h1 class="white-title">会社案内</h1>
	<main id="contact">
		<div class="wrapper-size">
			<ol class="contact-path">
				<li>
					<a href="<?php bloginfo('url') ?>">ホーム</a>
				</li>
				<li class="active">
					<a href="company">会社案内</a>
				</li>
			</ol>
			<p>「需要と供給」はビジネスの基本です。そして、需要と供給は場所によって異なります。<br>楽しいチリビジは最適な需要と供給が得られる場所や時間を見つけるお手伝いを地理の観点で提供します。</p>
			<div class="center-text mar_top40">
				<a href="outline" class="company-item">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/company/company_1.jpg" alt="会社概要" width="100%" />
					<h3>会社概要</h3>
				</a> 
				<a href="message" class="company-item">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/company/company_2.jpg" alt="代表挨拶" width="100%" />
					<h3>代表挨拶</h3>
				</a> 
				<a href="books" class="company-item">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/company/company_3.jpg" alt="著書紹介" width="100%" />
					<h3>著書紹介</h3>
				</a> 
			</div>
		</div>
	</main>
<?php get_footer();?>
