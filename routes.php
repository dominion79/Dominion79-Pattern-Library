<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'library':
				$controller = new LibraryController();
      break;

      case 'pattern':
        // we need the model to query the database later in the controller
        // require_once('models/pattern.php');
        $controller = new PatternController();
      break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('library' => ['patterns', 'error'],
                       'pattern' => ['view', 'error']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('library', 'error');
    }
  } else {
    call('library', 'error');
  }
?>
