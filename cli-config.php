<?php

require __DIR__.'/boot.php';

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet(
    $entityManager
);