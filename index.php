<?php
require_once  'config.php';

require_once 'classes/Bootstrap.php';
require_once 'classes/Controller.php';
require_once 'classes/Model.php';

require_once 'models/home.php';
require_once 'models/user.php';
require_once 'models/share.php';

require_once 'controllers/home.php';
require_once 'controllers/users.php';
require_once 'controllers/shares.php';

if(isset($_SERVER['REQUEST_URI'])):
    $uri = explode("/", $_SERVER['REQUEST_URI']);
    $_GET['controller'] = $uri[1];
    $_GET['action'] = $uri[2] ?? "";
else:
        $_GET['controller'] = "";
        $_GET['action'] = "";
endif;

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if($controller):
    $controller->executeAction();
endif;