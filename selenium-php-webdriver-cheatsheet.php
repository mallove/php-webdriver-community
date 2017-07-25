<?php

# start an instance of firefox with selenium-webdriver

$browser_type = 'firefox';
$host = 'http://localhost:4444/wd/hub';

$capabilities = array(\WebDriverCapabilityType::BROWSER_NAME => $browser_type);
$driver = RemoteWebDriver::create($host, $capabilities);

# $browser_type
# :firefox => firefox
# :chrome  => chrome
# :ie      => iexplore
# Go to a specified URL

$driver->get('http://google.com');
$driver->navigate()->to('http://google.com');

?>
