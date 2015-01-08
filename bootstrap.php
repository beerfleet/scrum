<?php

require_once './vendor/autoload.php';

// ---------------->  Doctrine
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$isDevMode = false;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'php_usr',
    'password' => 'Appel.Sap',
    'dbname'   => 'whiskydb',
);

$paths = array("/config/yaml/doctrine/");
$config = Setup::createYAMLMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);

// ---------------->  YAML
use Doctrine\ORM\Mapping\Driver\YamlDriver;

// $config instanceof Doctrine\ORM\Configuration
$driver = new YamlDriver(array('/config/yaml'));
$config->setMetadataDriverImpl($driver);
