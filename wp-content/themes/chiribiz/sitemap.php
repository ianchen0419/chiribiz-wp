<?php /* Template Name: sitemap */ ?>
<?php get_header();?>
	<div id="visual">
		<div class="blue-title">
			<h1>サイトマップ</h1>	
		</div>
	</div>
	<main id="contact">
		<div class="wrapper-size">
			<ol class="contact-path">
				<li>
					<a href="<?php bloginfo('url') ?>">ホーム</a>
				</li>
				<li class="active">
					<a href="sitemap">サイトマップ</a>
				</li>
			</ol>
			<div class="sitemap-wrapper">
				<div class="sitemap-item">
					<div class="sitemap-title">
						<a href="<?php bloginfo('url') ?>">
							<i class="fa fa-home fa-2x fa-fw"></i>
							<span>トップページ</span>
						</a>
					</div>
				</div>
				<div class="sitemap-item">
					<div class="sitemap-title">
						<a href="company">
							<i class="fa fa-file-text fa-2x fa-fw"></i>
							<span>会社案内</span>
						</a>
					</div>
					<ul class="sitemap-subcontent">
						<li>
							<a href="outline">
								<i class="fa fa-caret-right fa-fw"></i>
								<span>会社概要</span>
							</a>
						</li>
						<li>
							<a href="message">
								<i class="fa fa-caret-right fa-fw"></i>
								<span>代表挨拶</span>
							</a>
						</li>
						<li>
							<a href="books">
								<i class="fa fa-caret-right fa-fw"></i>
								<span>著書紹介</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="sitemap-item">
					<div class="sitemap-title">
						<a href="products">
							<i class="fa fa-map fa-2x fa-fw"></i>
							<span>製品 / サービス</span>
						</a>
					</div>
					<ul class="sitemap-subcontent">
						<li>
							<a href="miraitoukei">
								<i class="fa fa-caret-right fa-fw"></i>
								<span>未来統計</span>
							</a>
						</li>
						<li>
							<a href="asahiru">
								<i class="fa fa-caret-right fa-fw"></i>
								<span>あさひる統計</span>
							</a>
						</li>
						<li>
							<a href="dogadehazard">
								<i class="fa fa-caret-right fa-fw"></i>
								<span>動画で理解！わが家のハザードマップ</span>
							</a>
						</li>
						<li>
							<a href="javascript:;">
								<i class="fa fa-caret-right fa-fw"></i>
								<span>未来商圏レポート</span>
							</a>
							<ul class="sitemap-subcontent pad_lt20">
								<li>
									<a href="javascript:;">
										<i class="fa fa-minus fa-fw"></i>
										<span>未来商圏とは</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<i class="fa fa-minus fa-fw"></i>
										<span>未来商圏レポートFAQ</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<i class="fa fa-minus fa-fw"></i>
										<span>未来商圏レポート作成</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<i class="fa fa-minus fa-fw"></i>
										<span>未来商圏レポート利用規約</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<i class="fa fa-minus fa-fw"></i>
										<span>未来統計向けACT距離計算サービス利用規約</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<i class="fa fa-minus fa-fw"></i>
										<span>プライバシーポリシー</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="location-passport">
								<i class="fa fa-caret-right fa-fw"></i>
								<span>Location Passport</span>
							</a>
						</li>
						<li>
							<a href="roadinfo">
								<i class="fa fa-caret-right fa-fw"></i>
								<span>道路開通予定情報提供サービス</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="sitemap-item">
					<div class="link-area">
						<ul>
							<li>
								<a href="blog">
									<span class="fa fa-arrow-right"></span>
									<span>ブログ</span>
								</a>
							</li>
							<li>
								<a href="contact-us">
									<span class="fa fa-arrow-right"></span>
									<span>お問い合わせ</span>
								</a>
							</li>
							<li>
								<a href="news">
									<span class="fa fa-arrow-right"></span>
									<span>ニュース一覧</span>
								</a>
							</li>
							<li>
								<a href="sitemap">
									<span class="fa fa-arrow-right"></span>
									<span>サイトマップ</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php get_footer();?>
