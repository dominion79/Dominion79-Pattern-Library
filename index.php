<?php
  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  } else {
    $controller = 'library';
    $action     = 'patterns';
  }
  require_once('views/layout.php');
?>
