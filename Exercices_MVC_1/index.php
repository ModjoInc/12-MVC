<?php
require 'controllers/init.php';



include CONTROLLERS . 'errors.php';
// require_once CONTROLLERS . 'init.php';
require_once CONTROLLERS . 'PDO.php';

ob_start();

if (!empty($_GET['']))
{

  // $controller = dirname(__FILE__) . CONTROLLERS . $_GET['controller'] . '/';

  $action = isset($_GET['action']) ?  htmlentities($_GET['action']) . '.php' : 'index.php';

  if (is_file($action))
  {
    include $action;
  }
  else
  {
    include VIEWS . 'view_accueil.php';
  }

}
else
{
  include VIEWS . 'view_accueil.php';
}

$html = ob_get_clean();


require_once VIEWS . 'header.php';


echo $html;

require_once VIEWS . 'footer.php';


 ?>
