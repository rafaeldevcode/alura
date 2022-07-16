<?php

    require_once __DIR__ . '/vendor/autoload.php';

    use Alura\Doctrine\Helper\EntityManagerFactory;
    use Doctrine\ORM\Tools\Console\ConsoleRunner;

    $entityManagerFactory = new EntityManagerFactory();
    $entityManager = $entityManagerFactory->getEntityManager();

    return ConsoleRunner::createHelperSet($entityManager);