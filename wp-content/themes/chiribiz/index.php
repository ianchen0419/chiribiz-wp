<?php get_header();?>

	<div id="visual" class="top-image">
		<div class="wrapper-size">
			<h1 class="slogan">今日のビジネス、未来のビジネス。<br>地理でサポート。</h1>
		</div>
	</div>
	<main id="contact">
		<div class="wrapper-size">
			<div class="concept-area">
				<div class="concept-title">
					<h2 class="eng-title concept">CONCEPT</h2>
					<div class="concept-jp">コンセプト</div>
				</div>
				<article>「需要と供給」はビジネスの基本です。<br><br>そして、需要と供給は場所によって異なります。楽しいチリビジは最適な需要と供給が得られる<br>場所や時間を見つけるお手伝いを地理の観点で提供します。</article>
			</div>
			<div class="product-title">
				<h2 class="eng-title product">PRODUCT/SERVICE</h2>
			</div>
			<div class="product-title-jp">製品・サービス</div>
			<div class="product-article">
				<p>地理情報システムがはじめての方から、エキスパートの方までを対象にしています</p>
			</div>
			<div class="product-content">
				
				<div class="product-item miraitoukei">
					<div class="badge">
						<span>データベース</span>
					</div>
					<a href="miraitoukei">	
						<div class="product-block">
							<div class="block-title">
								<h3>未来統計</h3>
							</div>
							<hr />
							<p>近未来の統計値を推計手法により求めた過去に例のないGIS用人口統計データです。立地評価などのGIS分析に活用されています。</p>
						</div>
						<div class="product-button">
							<span>詳しくみる</span>
							<div class="arrow">
								<div class="triangle"></div>
							</div>
						</div>
					</a>
				</div>
				
				<div class="product-item asahiru">
					<div class="badge">
						<span>データベース</span>
					</div>
					<a href="asahiru">
						<div class="product-block">
							<div class="block-title">
								<h3>あさひる統計</h3>
							</div>
							<hr />
							<p>スマートフォンのアプリから得られる位置情報データを統計処理し、125m四方という小地域において、人口を曜日時間帯に推計した人口統計データです。</p>
						</div>
						<div class="product-button">
							<span>詳しくみる</span>
							<div class="arrow">
								<div class="triangle"></div>
							</div>
						</div>
					</a>
				</div>
				
				
				<div class="product-item douga">
					<div class="badge">
						<span>防災サービス</span>
					</div>
					<a href="dogadehazard">
						<div class="product-block">
							<div class="block-title">
								<h3>動画で理解！<br>わが家の<br>ハザードマップ</h3>
							</div>
							<hr />
							<p>立地によって異なる避難情報を各戸用の動画で読み聞かせ、災害リスクや避難情報の提供を行う地理情報システムです。</p>
						</div>
						<div class="product-button">
							<span>詳しくみる</span>
							<div class="arrow">
								<div class="triangle"></div>
							</div>
						</div>
					</a>
				</div>
				
				
				<div class="product-item miraishoken">
					<div class="badge">
						<span>マーケティングレポート</span>
					</div>
					<a href="miraishoken">
						<div class="product-block">
							<div class="block-title">
								<h3>未来商圏<br>レポート</h3>
							</div>
							<hr />
							<p>将来推計人口に基づいた商圏レポートをオンラインで作成するサービスです。手軽に未来の立地評価レポートが入手できます。</p>
						</div>
						<div class="product-button">
							<span>詳しくみる</span>
							<div class="arrow">
								<div class="triangle"></div>
							</div>
						</div>
					</a>
				</div>
				
			</div>
			<div class="news-title">
				<h2 class="eng-title news">NEWS RELEASE</h2>
			</div>
			<ul class="news-area">
				<?php 
					query_posts('cat=2');
					while ( have_posts() ) : the_post();  
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
				<?php endwhile; ?>
			</ul>
			<div class="right-button">
				<a href="news" class="news-button">
					<span>過去のニュース一覧</span>
					<i class="fa fa-angle-right fa-fw"></i>
				</a>
			</div>
		</div>
	</main>

<?php get_footer();?>