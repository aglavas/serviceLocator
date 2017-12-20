<?php
// example injecting a service locator
use Registry\Registry as Registry,
Registry\RegistryLocator as RegistryLocator;

// include the autoloader
require_once 'Autoloader.php';
Autoloader::getInstance();

// create an instance of the registry and save some data in it
$registry = new Registry(new RegistryLocator);
$registry->set('date', new DateTime())
->set('exception', new Exception());

// get the data from the registry
var_dump([
    'date' => $registry->get('date'),
    'exception' => $registry->get('exception')
]);