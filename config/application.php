<?php
$root_dir = dirname(__DIR__);
$webroot_dir = $root_dir . '/web';

/**
 * Set up our global environment constant and load its config first
 * Default: development
 */
$env_local = dirname(__FILE__) . '/environments/local.php';
if (!file_exists($env_local)) {
    define('WP_ENV', $_GET['FORWARDSLASH_ENV'] ? $_GET['FORWARDSLASH_ENV'] : 'development');
    $env_config = dirname(__FILE__) . '/environments/' . WP_ENV . '.php';
}

require_once $env_config;

/**
 * Custom Content Directory
 */
define('CONTENT_DIR', '/app');
define('WP_CONTENT_DIR', $webroot_dir . CONTENT_DIR);
define('WP_CONTENT_URL', WP_HOME . CONTENT_DIR);

/**
 * DB settings
 */
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix = WP_TABLE_PREFIX;

/**
 * Custom Settings
 */
define('AUTOMATIC_UPDATER_DISABLED', true);
define('DISABLE_WP_CRON', true);
define('DISALLOW_FILE_EDIT', true);

/**
 * Bootstrap WordPress
 */
if (!defined('ABSPATH')) {
  define('ABSPATH', $webroot_dir . '/wp/');
}
