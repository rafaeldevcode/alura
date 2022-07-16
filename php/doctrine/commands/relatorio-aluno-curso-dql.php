<?php

    require_once __DIR__ . '/../vendor/autoload.php';

    use Alura\Doctrine\Entity\Aluno;
    use Alura\Doctrine\Entity\Telefone;
    use Alura\Doctrine\Helper\EntityManagerFactory;
    use Doctrine\DBAL\Logging\DebugStack;

    $entityManagerFactory = new EntityManagerFactory();
    $entityManager = $entityManagerFactory->getEntityManager();

    $degubStack = new DebugStack();
    $entityManager->getConfiguration()->setSQLLogger($degubStack);

    $alunoClass = Aluno::class;
    $dql = "SELECT aluno, telefones, cursos FROM $alunoClass aluno JOIN aluno.telefones telefones JOIN aluno.cursos cursos";
    $query = $entityManager->createQuery($dql);

    $alunos = $query->getResult();

    foreach($alunos as $aluno){
        $telefones = implode(', ', $aluno->getTelefones()->map(function(Telefone $telefone){
            return $telefone->getTelefone();
        })->toArray());

        echo "ID: {$aluno->getId()}\n";
        echo "Nome: {$aluno->getNome()}\n";
        echo "Telefones: {$telefones}\n";

        $cursos = $aluno->getCursos();
        foreach($cursos as $curso){
            echo "\t ID: {$curso->getId()}\n";
            echo "\t Nome: {$curso->getNome()}\n\n";
        }
    }

    echo "\n";

    foreach($degubStack->queries as $queryInfo){
        echo $queryInfo['sql'] . "\n";
    }