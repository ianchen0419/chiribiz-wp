<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'chiribiz' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'r~~:gwtm.a*|dyrj[WY[p$qP:HQ0SV oVM&q}I#9P`hc,[jS8Or9k>^C$ V<uh$ ' );
define( 'SECURE_AUTH_KEY',  'KfgRd7QT6u4*tywZBXG]~7%Am+6ov:Y|pKWkE.QZisKN|V@O Pt$rU$a48$1U$kz' );
define( 'LOGGED_IN_KEY',    'N##!2a-~}mT@()t+}~mEI)2-/O+^k2V~YI|ZK@[<__<bN<AIY9Zkmp^.996}B5d3' );
define( 'NONCE_KEY',        'n%[4G.>yUc;6RwLH!;;7{u.:ric1>!/dP R/zQsfKBWYpY%TB.KbD p3&+jdmy]J' );
define( 'AUTH_SALT',        '6KW(_leMs8bX94{O.z:}C0O -B8iaDB%yXbJ{T#V1(0ftL9_>E-y2Kk2et3lp8M~' );
define( 'SECURE_AUTH_SALT', 'vUl(=ZOlb;#jmONOk# cKnIGTHpHh)E[^(CGr-o;;w/QVwH.*G +Vp?q;M*=Y_uA' );
define( 'LOGGED_IN_SALT',   'JMBkABxE(9$(cJc6V`()C*bTcs/{DVTt15G`Qbf(n}<}Mpc>7GIpe5cZuP6a7}=J' );
define( 'NONCE_SALT',       'fNw6cw;YNz{X^V!KU.mx2_Yxhc7OM)Ap)E)R{v!RO1mS`.>GEH}S9qDNk;quze,$' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
