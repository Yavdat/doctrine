<?php

require __DIR__.'/vendor/autoload.php';

spl_autoload_register(function ($class){
    require __DIR__.'/src/'.str_replace('\\','/',$class).'.php';
});

$path=[__DIR__.'/src'];

$config=\Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration(
    $path,
    $devMode=true
);

$connection=[
    'driver'=>'pdo_mysql',
    'user'=>'root',
    'password'=>'',
    'dbname'=>'test'
];

$entityManager=\Doctrine\ORM\EntityManager::create($connection,$config);

