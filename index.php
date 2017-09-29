<?php

error_reporting(E_ALL);
define('EXT', '.php');
define('DOCROOT', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);
define('APP', DOCROOT.'application'.DIRECTORY_SEPARATOR);
define('FRM', DOCROOT.'frm'.DIRECTORY_SEPARATOR);
define('UPLOADS', DOCROOT.'media'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR);

require(FRM.'vendor/autoload.php');

$config = require(APP.'config/app.php');

$app = new frm\App($config);
$app->run();