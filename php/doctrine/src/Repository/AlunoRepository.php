<?php

    namespace Alura\Doctrine\Repository;

    use Doctrine\ORM\EntityRepository;

    class AlunoRepository extends EntityRepository
    {
        public function buscarCursosPorAluno()
        {
            $query = $this->createQueryBuilder('aluno')
                ->join('aluno.telefones', 'telefones')
                ->join('aluno.cursos', 'cursos')
                ->addSelect('telefones')
                ->addSelect('cursos')
                ->getQuery();

            return $query->getResult();
        }

        public function buscarCursosPorAluno2(bool $exibirCursos)
        {
            $builder = $this->createQueryBuilder('aluno')
                ->join('aluno.telefones', 'telefones')
                ->addSelect('telefones');

                if($exibirCursos === true){
                    $builder->join('aluno.cursos', 'cursos')
                        ->addSelect('cursos');
                }
                $query = $builder->getQuery();

            return $query->getResult();
        }
    }