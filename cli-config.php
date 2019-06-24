<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;                                                                                                                                                                                                   // replace with file to your own project bootstrap                                                                      require_once 'bootstrap.php';                                                                                                                                                                                                                   // replace with mechanism to retrieve EntityManager in your app                                                         $entityManager = GetEntityManager();                                                                                           <?php
use Alura\Doctrine\Helper\EntityManagerFactory;

// replace with file to your own project bootstrap
require_once __DIR__ . '/vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();

// replace with mechanism to retrieve EntityManager in your app
$entityManager = $entityManagerFactory->getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);

