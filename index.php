<?php
require_once __DIR__ . '/application/core/Loader.php';
require_once __DIR__ . '/application/core/CI_Controller.php';
require_once __DIR__ . '/application/controllers/Welcome.php';

$controller = new Welcome();
$controller->index();
