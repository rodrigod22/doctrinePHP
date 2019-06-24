<?php

use Alura\Doctrine\Helper\EntityManagerFactory;
use Alura\Doctrine\Entity\Aluno;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
$alunoRepository = $entityManager->getRepository(Aluno::class); 

$alunoList = $alunoRepository->findAll();

foreach ($alunoList as $aluno){
    echo "ID: " . $aluno->getId()."<br>";
    echo "Nome: " . $aluno->getNome()."<br>";
}

$buscaId = $alunoRepository->find(1);
echo $buscaId->getNome();


//busca condicional
$rodrigo = $alunoRepository->findOneBy([
    'nome' => 'Rodrigo2'
    ]);

var_dump($rodrigo);
        