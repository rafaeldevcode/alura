<?php

    require_once __DIR__ . '/../vendor/autoload.php';

    use Alura\Doctrine\Entity\Curso;
    use Alura\Doctrine\Helper\EntityManagerFactory;

    $entityManagerFactory = new EntityManagerFactory();
    $entityManager = $entityManagerFactory->getEntityManager();

    $nome = $argv[1];
    $curso = new Curso();

    $curso->setNome($nome);

    $entityManager->persist($curso);
    $entityManager->flush();

