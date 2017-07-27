<?php
// An example of using php-webdriver.
 
namespace Facebook\WebDriver;
 
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
 
require_once('vendor/autoload.php');
 
// start Firefox with 5 second timeout
// $host = 'http://localhost:4445/wd/hub'; // this is the default
// $capabilities = DesiredCapabilities::firefox();
// $driver = RemoteWebDriver::create($host, $capabilities, 5000);  # Connection refused?
 
// start EXISTING Firefox
$host = 'http://localhost:4445/wd/hub'; // this is the default
$capabilities = DesiredCapabilities::firefox();
// createBySessionID($session_id, $selenium_server_url = 'http://localhost:4444/wd/hub')
//$driver = RemoteWebDriver::createBySessionID('ff291d17-f181-437e-a836-cc2d15dbbccc' /* file_get_contents("start-a-firefox-webdriver-instance.php.out")*/, $host);
$session_id = rtrim(file_get_contents("start-a-firefox-webdriver-instance.php.out"));
//var_dump($session_id);
$driver = RemoteWebDriver::createBySessionID($session_id, $host);

// navigate to 'http://www.seleniumhq.org/'
// $driver->get('http://www.seleniumhq.org/');
$driver->get('http://localhost/evp/blog/day-life-potus-0');
 
// adding cookie
# $driver->manage()->deleteAllCookies();
#  
# $cookie = new Cookie('cookie_name', 'cookie_value');
# $driver->manage()->addCookie($cookie);
#  
# $cookies = $driver->manage()->getCookies();
# print_r($cookies);
 
try {
  // click the link 'About'
  $link_edit = $driver->findElement(
      WebDriverBy::cssSelector('li.link-count-node-edit.first')
  );

  $link_gear = $driver->findElement(
      WebDriverBy::cssSelector('div.contextual-links-wrapper.contextual-links-processed')
  );
  $link_edit->moveToElement();
  $link_gear->click();

} catch (Exception $e) {
  var_dump($e);
}
 
// wait until the page is loaded
$driver->wait()->until(
    WebDriverExpectedCondition::titleContains('Edit Blog entry A day in the life')
);
 
// print the title of the current page
echo "The title is '" . $driver->getTitle() . "'\n";
 
// print the URI of the current page
echo "The current URI is '" . $driver->getCurrentURL() . "'\n";
 
// write 'php' in the search box
$driver->findElement(WebDriverBy::id('q'))
    ->sendKeys('php');
 
// submit the form
$driver->findElement(WebDriverBy::id('submit'))
    ->click(); // submit() does not work in Selenium 3 because of bug https://github.com/SeleniumHQ/selenium/issues/3398
 
// wait at most 10 seconds until at least one result is shown
$driver->wait(10)->until(
    WebDriverExpectedCondition::presenceOfAllElementsLocatedBy(
        WebDriverBy::className('gsc-result')
    )
);
 
// close the Firefox
// $driver->quit();
