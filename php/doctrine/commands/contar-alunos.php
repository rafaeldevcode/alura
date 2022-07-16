<?php

    require_once __DIR__ . '/../vendor/autoload.php';

    use Alura\Doctrine\Entity\Aluno;
    use Alura\Doctrine\Helper\EntityManagerFactory;

    $entityManagerFactory = new EntityManagerFactory();
    $entityManager = $entityManagerFactory->getEntityManager();

    $alunoClass = Aluno::class;
    $dql = "SELECT COUNT(aluno) FROM $alunoClass aluno";
    $query = $entityManager->createQuery($dql);

    $qtdAlunos = $query->getSingleScalarResult();

    echo "Quantidade de alunos: {$qtdAlunos}";