<?php

define("BASE_DIR", "/Users/hmdcadministrator/Downloads/php-webdriver-community/");
define("PATH_SEPARATOR", ":");
define("DIRECTORY_SEPARATOR", ":");

function appendToIncludePath($path) {
    ini_set('include_path', ini_get('include_path') . ':' . BASE_DIR . $path);
}

$webdriver_includes = array(
#   ".",
    "lib",
#   "./lib/Chrome",
#   "./lib/Exception",
#   "./lib/Firefox",
#   "./lib/Interactions",
#   "./lib/Interactions/Internal",
#   "./lib/Interactions/Touch",
#   "./lib/Internal",
#   "./lib/Net",
#   "./lib/Remote",
#   "./lib/Remote/Service",
#   "./lib/Support",
#   "./lib/Support/Events",
);

foreach ($webdriver_includes as $i) {
  appendToIncludePath($i);
}

# include_once "/Users/hmdcadministrator/Downloads/php-webdriver-community/lib/WebDriver.php";
# include_once "/Users/hmdcadministrator/Downloads/php-webdriver-community/lib/WebDriverSearchContext.php";
# include_once "/Users/hmdcadministrator/Downloads/php-webdriver-community/lib/Remote/RemoteWebDriver.php";

var_dump(get_include_path());
# exit;

// Setup: $ php composer.phar require facebook/webdriver

require_once('/Users/hmdcadministrator/Downloads/php-webdriver-community/vendor/autoload.php');
# require_once('vendor/sebastian/comparator/tests/autoload.php');
use \Facebook\Remote\RemoteWebDriver;
use \Facebook\WebDriverBy;

$web_driver = RemoteWebDriver::create(
  "https://YOUR_SAUCE_USERNAME:YOUR_SAUCE_ACCESS_KEY@ondemand.saucelabs.com:443/wd/hub",
  array("platform" => "Mac", "browserName" => "chrome", "version" => "40")
);
$web_driver->get("https://saucelabs.com/test/guinea-pig");

/*
  Test actions here...
*/

$web_driver->quit();

?>
