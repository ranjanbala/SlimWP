<?php

define('APP_ROOT', dirname(__DIR__));
define ('APP_ENV', getenv('APPLICATION_ENV'));

/** Environment Specific Configuration */
if (file_exists(APP_ROOT . '/config/env/local.php')) {
	require App_ROOT . '/config/env/local.php';
} else {
	require App_ROOT . '/config/env/' . APP_ENV . '.php';
};

define('WP_HOME', 'http://localhost/slate');
define('WP_SITEURL', WP_HOME . '/cms/wp/');

define('WP_CONTENT_DIR', APP_ROOT . '/app/content');
define('WP_CONTENT_URL', WP_HOME . '/content');

define('WP_DEBUG', true);

 ?>