<?php
require 'controllers/globals.php';

include CONTROLLERS . 'errors.php';

if (isset($URL) && $URL != 'home')
{
  include VIEWS . 'header.html';
  include VIEWS . 'subheader.html';
  include VIEWS . 'menu.html';
  include CONTROLLERS . 'routeur.php';
  include VIEWS . 'footer.html';
}
else
{
  include VIEWS . 'header.html';
  include VIEWS . 'menu.html';
  include CONTROLLERS . 'routeur.php';
  include VIEWS . 'footer.html';
}


 ?>
