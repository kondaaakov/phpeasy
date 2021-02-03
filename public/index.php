<?php

define('DOCROOT', __DIR__ . DIRECTORY_SEPARATOR  . '..' . DIRECTORY_SEPARATOR);
define('TPL_PATH', DOCROOT . 'templates' . DIRECTORY_SEPARATOR);
define('HLP_PATH', DOCROOT . 'engine' . DIRECTORY_SEPARATOR . 'helpers' . DIRECTORY_SEPARATOR);

require HLP_PATH . 'helper.php';
require HLP_PATH . 'getImages.php';

$uri = explode('/', $_SERVER['REQUEST_URI']);
$action = isset($uri[1]) && $uri[1] ? $uri[1] : 'home';
$filePath = DOCROOT . 'engine' . DIRECTORY_SEPARATOR . 'actions' . DIRECTORY_SEPARATOR . $action . '.php';

if (!file_exists($filePath)) {
	abort(404);
}

require($filePath);