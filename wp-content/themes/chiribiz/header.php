<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="ja" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<link rel="icon" href="<?php bloginfo('template_directory') ?>/inc/img/top/favicon.ico" />
	<meta name="title" content="楽しいチリビジ" />
	<meta name="description" content="「需要と供給」はビジネスの基本です。そして、需要と供給は場所によって異なります。楽しいチリビジは最適な需要と供給が得られる場所や時間を見つけるお手伝いを地理の観点で提供します" />
	<meta name="keywords" content="GIS,人口統計データ,立地評価,位置情報データ,地理情報システム,コーホート法,人口推計理論,地域開発情報,商圏レポート,商圏分析" />
	<title>楽しいチリビジ</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:700" />
	<link rel="stylesheet prefetch" href="<?php bloginfo('template_directory') ?>/inc/lib/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet prefetch" href="<?php bloginfo('template_directory') ?>/style.css" />
</head>

<body>
	<header id="header">
		<div class="wrapper-size">
			<div class="logo-area">
				<a href="<?php bloginfo('url'); ?>">
					<img src="<?php bloginfo('template_directory') ?>/inc/img/top/logo.png" alt="楽しいチリビジ" class="logo logo-pc" height="70" />
					<img src="<?php bloginfo('template_directory') ?>/inc/img/top/logo_mb.png" alt="楽しいチリビジ" class="logo logo-mb" height="70" />
				</a>
			</div>
			<nav class="menu">
				<ul class="menu-area">
					<li>
						<a href="<?php bloginfo('url'); ?>">ホーム</a>
					</li>
					<li>
						<a href="<?php bloginfo('url'); ?>/products">製品・サービス</a>
					</li>
					<li>
						<a href="<?php bloginfo('url'); ?>/company">会社案内</a>
					</li>
					<li>
						<a href="<?php bloginfo('url'); ?>/blog">ブログ</a>
					</li>
					<li>
						<a href="<?php bloginfo('url'); ?>/contact-us">お問い合わせ</a>
					</li>
				</ul>
			</nav>
			<div class="report-area">
				<a href="javascript:;" target="_blank">未来商圏レポート作成</a>
			</div>
			<!-- スマホ版 -->
			<label class="mobile-menu-bar">
				<input type="checkbox" class="fake-menu" onchange="document.body.classList.toggle('menu-open')" />
				<div class="menu-icon">
					<div class="line line1"></div>
					<div class="line line2"></div>
					<div class="line line3"></div>
				</div>
			</label>
		</div>
		<nav id="mobileMenu">
			<ul>
				<li>
					<a href="javascript:;" class="report-button" target="_blank">
						<span>未来商圏レポート作成</span>	
						<i class="fa fa-angle-right fa-fw"></i>
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>">
						<span>ホーム</span>
						<i class="fa fa-angle-right fa-fw"></i>
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/products">
						<span>製品・サービス</span>
						<i class="fa fa-angle-right fa-fw"></i>
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/company">
						<span>会社案内</span>
						<i class="fa fa-angle-right fa-fw"></i>
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/blog">
						<span>ブログ</span>
						<i class="fa fa-angle-right fa-fw"></i>
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/contact-us">
						<span>お問い合わせ</span>
						<i class="fa fa-angle-right fa-fw"></i>
					</a>
				</li>
			</ul>
		</nav>
	</header>