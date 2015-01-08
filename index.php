<?php

use Doctrine\Common\ClassLoader;
use scrum\ScotchLodge\Service\Output;

require_once './vendor/autoload.php';

$classloader = new ClassLoader("scrum", "src");
$classloader->register();

$output = new Output();

try {
  $output->render('homepage.html.twig', array());
} catch (Exception $ex) {
  $output->render('probleem.html.twig', array('probleem' => $ex->getMessage()));
}
