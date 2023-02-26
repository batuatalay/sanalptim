<?php
	class BaseRouter {
		private $uri;
		
		public function __construct() {
			$dirName = dirname($_SERVER['SCRIPT_NAME']);
			$baseName = basename($_SERVER['SCRIPT_NAME']);
			$this->uri = $_SERVER["REQUEST_URI"];
		}
		public function run($url, $callback, $method = 'get') {
			if (preg_match('@^' . $url . '$@', $this->uri, $parameters)) {
				if (is_callable($callback)) {
					call_user_func($callback, $parameters);
					return 0;
				};
				$controller = explode("@", $callback);
				$controllerFile =BASE . '/controller/' . strtolower($controller[0]) . ".controller.php";
				if(file_exists($controllerFile)) {
					require $controllerFile;
					call_user_func([new $controller[0], $controller[1]]);
				}
			}
		}
	}
