<?php

namespace Facebook\WebDriver;


use Facebook\WebDriver\Chrome\ChromeDriver;
use Facebook\WebDriver\Firefox;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
 
require_once('vendor/autoload.php');

$host = 'http://localhost:4445/wd/hub'; // this is the default
$capabilities = DesiredCapabilities::firefox();
//$capabilities = DesiredCapabilities::chrome();
//$capabilities = DesiredCapabilities::htmlUnit();

//$capabilities->setCapability('acceptSslCerts', true);
//$capabilities->setVersion("52.2.0");
//$capabilities->setJavascriptEnabled(true);

//$capabilities->setCapability(FirefoxDriver::PROFILE, ?);

//$capabilities = DesiredCapabilities::chrome();
//$driver = new \Facebook\WebDriver\Remote\RemoteWebDriver($host, $capabilities, 20000);
//$driver = new \Facebook\WebDriver\Firefox\FirefoxDriver($host, $capabilities, 20000);
//$driver = new \Facebook\WebDriver\Chrome\ChromeDriver($host, $capabilities, 20000);
$driver = RemoteWebDriver::create($host, $capabilities, 5000);

var_dump($driver);
print $driver->getSessionID();
