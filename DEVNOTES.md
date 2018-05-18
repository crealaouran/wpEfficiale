notes de developpement
=======


installation serveur depuis :
 https://www.24joursdeweb.fr/2014/comment-bien-versionner-son-site-wordpress-avec-git-et-github/


1 - suivre la proc
2 - define( 'ADMIN_COOKIE_PATH', SITECOOKIEPATH . WP_ADMIN_DIR); 
a integrer dans le wp
	//wp-content se trouve dans le même répertoire que wp-config.php
	//Pour une compatibilité PHP5.2, je n'utilise pas __DIR__
	define('WP_CONTENT_DIR', dirname(__FILE__).'/wp-content');
	//L'URL doit être absolue vers le répertoire wp-content
	define('WP_CONTENT_URL', 'http://localhost/efficiale/wp-content/');

	define('WP_ADMIN_DIR', 'wp-cms/wp-admin');  

