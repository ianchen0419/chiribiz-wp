<?php 

	/**
	 * アイキャッチ画像に対応する
	 */
	function my_thumbnails(){
		// アイキャッチ画像を有効にする
		add_theme_support( 'post-thumbnails' ); 
		// アイキャッチ画像サイズを指定する（横：640px 縦：384）
		// 画像サイズをオーバーした場合は切り抜き
		set_post_thumbnail_size( 500, 300, false ); 
		// set_post_thumbnail_size( 500, 300, true ); 
	}
	add_action( 'after_setup_theme', 'my_thumbnails' );

?>