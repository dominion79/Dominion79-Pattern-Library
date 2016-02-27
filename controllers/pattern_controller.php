<?php
	class PatternController {

		public function view() {

			$path    = 'patterns';

			$prefix = 'pattern-';

			$pattern = array();

      if (isset($_GET['pattern'])) {
        $pattern_name = $_GET['pattern'];
      }


      $dir = $prefix . $pattern_name;


			if(is_dir($path . '/' . $dir)) {

				$css = file_get_contents($path . '/' . $dir . '/css/styles.css' );
				$sass = file_get_contents($path . '/' . $dir . '/sass/sass.scss' );
				$markup = file_get_contents($path . '/' . $dir . '/markup/markup.html' );
				$example = file_get_contents($path . '/' . $dir . '/markup/markup.html' );
				$text = file_get_contents($path . '/' . $dir . '/text/summary.txt' );

				$css = htmlspecialchars($css);
				$sass = htmlspecialchars($sass);
				$markup = htmlspecialchars($markup);

				if (substr($dir, 0, strlen($prefix)) == $prefix) {
				    $name = substr($dir, strlen($prefix));
				}

				$name = ucfirst($name);

				$pattern = array (
					'name' => $name,
					'css' => $css,
					'sass' => $sass,
					'markup' => $markup,
					'example' => $example,
					'text' => $text,
				);

			}

      require_once('views/pattern/pattern.php');
		}
	}
?>
