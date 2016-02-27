<?php

if (isset($_GET['controller']) && isset($_GET['action']) && isset($_GET['pattern'])) {
  $controller = $_GET['controller'];
  $action     = $_GET['action'];
  $pattern     = $_GET['pattern'];
} else {
  $controller = 'library';
  $action     = 'patterns';
}

require_once('views/layout.php');

?>
