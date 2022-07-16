<?php

    require_once __DIR__ . '/../vendor/autoload.php';

    use Alura\Doctrine\Entity\{Aluno, Telefone};
    use Alura\Doctrine\Helper\EntityManagerFactory;

    $entityManagerFactory = new EntityManagerFactory();
    $entityManager = $entityManagerFactory->getEntityManager();

    $alunoClass = Aluno::class;
    // $dbl = "SELECT aluno FROM $alunoClass aluno";
    $dbl = "SELECT aluno FROM $alunoClass aluno WHERE aluno.id = 2 OR aluno.nome = 'Teste 2' ORDER BY aluno.nome";

    $query = $entityManager->createQuery($dbl);
    $alunos = $query->getResult();

    foreach($alunos as $aluno){
        $telefones = implode(', ', $aluno->getTelefones()->map(function(Telefone $telefone){
            return $telefone->getTelefone();
        })->toArray());

        echo "ID: {$aluno->getId()}\n Nome: {$aluno->getNome()} \n Telefones: {$telefones}\n\n";
    }

    exit();
    $aluno = $alunoRepository->find(1);

    echo "Aluno: {$aluno->getNome()}\n\n";

    $objectAluno = $alunoRepository->findBy([
        'nome' => 'Rafael Vieira'
    ]);

    var_dump($objectAluno);