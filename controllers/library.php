<?php
	class LibraryController {
		
		public function pattern() {
			
			$somevar = 'Hello World';
			
			$path    = 'patterns';
			
			$prefix = 'pattern-';
			
			$patterns = array();
			
			$dirs = array_slice(scandir($path), 2);
			
			foreach($dirs as $dir){
				
			
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
					
					$patterns[] = array (
						'name' => $name,
						'css' => $css,
						'sass' => $sass,
						'markup' => $markup,
						'exmaple' => $example,
						'text' => $text,
					);
				}
			}
			
      require_once('views/pattern.php');
		}
	}
?>