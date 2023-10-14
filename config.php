<?

if( !defined("PV_Access") || PV_Access != 'Ghbf5erT8$j6W@6'){
	die("Access Denied.");
}

define('ROOT_DIR', dirname(__FILE__) . '/');
define('Assets', ROOT_DIR . 'assets/');
define('SliderAssets', ROOT_DIR . 'assets/slider/');
define('Style', ROOT_DIR . 'style/');
define('CSS', Style . 'css/');
define('js', Style . 'js/');
define('images', Style . 'images/');
define('CachVer', "1.0.05");
////////////////////////////////////
////////////////////////////////////
require (ROOT_DIR."functions.php");
require (Assets."settings.php");
require (Assets."content.php");

?>