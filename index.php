<?php

require __DIR__.'/boot.php';

$repository=$entityManager->getRepository(\Models\Person::class);

$person=$repository->find(2);
var_dump($person);
//Realised "update"(CRUD)
$person->setAge(18);
$entityManager->flush();

//Realised "read"(CRUD)
//$person2=$repository->find(2);
$person2=$entityManager->find(\Models\Person::class,2);
var_dump($person2);

//Realised "create"(CRUD)
//$person=new \Models\Person();
//$person->setName('Petrov');
//$person->setAge(24);
//
//$entityManager->persist($person);
//
//$entityManager->flush();
//
//echo $person->getId();