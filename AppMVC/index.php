<?php 

define('VIEW', 'Views/');
define('CONTROLLER', 'Controllers/');

require_once(VIEW . 'header.php');

$action = isset($_GET['action']) ? htmlentities($_GET['action']) : 'default';
$controller = '';

switch ($action) {
	case 'login':
		require_once(CONTROLLER . 'LoginController.php');
		$controller = new LoginController();
		break;
	case 'logout':
		require_once(CONTROLLER . 'LogoutController.php');
		$controller = new LogoutController();
		break;
	case 'inventaire':
		require_once(CONTROLLER . 'InventaireController.php');
		$controller = new InventaireController();
		break;
	case 'liste-lot':
		require_once(CONTROLLER . 'ListeLotController.php');
		$controller = new ListeLotController();
		break;
	case 'recette':
		require_once(CONTROLLER . 'RecetteController.php');
		$controller = new RecetteController();
		break;
	
	default:
		require_once(CONTROLLER . 'LoginController.php');
		$controller = new LoginController();
		break;
}
//require_once(VIEWS . '');

$controller->run();

require_once(VIEW . 'footer.php');

?>