<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');
$configuration = ProjectConfiguration::getApplicationConfiguration('backend', 'dev', true);

$context = sfContext::createInstance($configuration);


$controller = $context->getController();
$controller->forward('default', 'index');
$context->getResponse()->send();