<?php

/**
 * When using the alternate WordPress root (`./wp/wp-admin/` etc.),
 * place this at the top of `wp-config.php`
 *
 * Login address will now be at `http://site.com/wp/wp-admin`
 */

// ...
// @package WordPress

@define('WP_CACHE', false);

@define('WP_SITEURL', 'http://'.$_SERVER['HTTP_HOST'].'/wp');
@define('WP_HOME', 'http://'.$_SERVER['HTTP_HOST']);
@define('WP_CONTENT_URL', WP_HOME.'/wp-content');
@define('WP_CONTENT_DIR', dirname(__FILE__).'/wp-content');

// ** MySQL settings - You can get this info from your web host ** //
// ...