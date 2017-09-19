<?php

$action = isset($_GET['action']) ? htmlentities($_GET['action']) : 'default';
$controller = '';

switch ($action) {
  case 'home':
    require_once ( CONTROLLERS . 'home.php');
    $controller = new HomeController();
  break;

  case 'makingof':
    require_once ( CONTROLLERS . 'makingof.php');
    $controller = new makingofController();
  break;

  case 'entreprise':
    require_once ( CONTROLLERS . 'entreprise.php');
    $controller = new entrepriseController();
  break;

  case 'presentation':
    require_once ( CONTROLLERS . 'presentation.php');
    $controller = new presentationController();
  break;

  case 'interview':
    require_once ( CONTROLLERS . 'interview.php');
    $controller = new interviewController();
  break;

  case 'conclusion':
    require_once ( CONTROLLERS . 'conclusion.php');
    $controller = new conclusionController();
  break;


  default:
    require_once ( CONTROLLERS . 'home.php');
    $controller = new HomeController();
    break;
}

$controller->run();


 ?>
