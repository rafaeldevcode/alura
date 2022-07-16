<?php

    require_once __DIR__ . '/../vendor/autoload.php';

    use Alura\Doctrine\Entity\{Aluno, Curso};
    use Alura\Doctrine\Helper\EntityManagerFactory;

    $entityManagerFactory = new EntityManagerFactory();
    $entityManager = $entityManagerFactory->getEntityManager();

    $alunoId = $argv[1];
    $cursoId = $argv[2];

    /**
     * @var Aluno $aluno
     */
    $aluno = $entityManager->find(Aluno::class, $alunoId);
    /**
     * @var Curso $curso
     */
    $curso = $entityManager->find(Curso::class, $cursoId);

    $curso->addAluno($aluno);
    $entityManager->flush();