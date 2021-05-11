<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'instanceid' => 'ocwmbik680as',
  'passwordsalt' => 'S1EDZK5JIZ+7bFTszmmSfpjpnnyex7',
  'secret' => 'qIPB8dLa8o1cx5HMNo32r7y1lG/NCUvpKMz6ZXya+j1IvVUB',
  'trusted_domains' =>
  array (
    0 => 'nextcloud',
    1 => 'localhost:1234',
    2 => '127.0.0.1',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '21.0.1.1',
  'overwrite.cli.url' => 'http://localhost:1234',
  'dbname' => 'dummy',
  'dbhost' => 'mariadb',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'dummy',
  'dbpassword' => 'dummy',
  'installed' => true,
);
