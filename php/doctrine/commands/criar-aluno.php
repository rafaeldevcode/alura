<?php

    require_once __DIR__ . '/../vendor/autoload.php';

    use Alura\Doctrine\Entity\{Aluno, Telefone};
    use Alura\Doctrine\Helper\EntityManagerFactory;

    $entityManagerFactory = new EntityManagerFactory();
    $entityManager = $entityManagerFactory->getEntityManager();

    $aluno = new Aluno();
    $aluno->setNome($argv[1]);

    for($i = 2; $i < $argc; $i++){
        $numeroTelefone = $argv[$i];
        $telefone = new Telefone();

        $telefone->setTelefone($numeroTelefone);
        $aluno->addTelefone($telefone);
    }

    $entityManager->persist($aluno);

    $entityManager->flush();