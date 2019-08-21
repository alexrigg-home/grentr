<?php
$container->setParameter('database_host', '127.0.0.1');
$container->setParameter('database_port', '3306');
$container->setParameter('database_name', getenv('GRENTR_DB_NAME'));
$container->setParameter('database_user', getenv('GRENTR_DB_USER'));
$container->setParameter('database_password', getenv('GRENTR_DB_PASSWORD'));
$container->setParameter('mailer_transport', 'smtp');
$container->setParameter('mailer_host', '127.0.0.1');
$container->setParameter('mailer_user', null);
$container->setParameter('secret', '37a3bef8f36f210e136206852f9fff56259b99d0');

   // dump($container->getParameter('database_name'));
   // dump($container->getParameter('database_user'));
   // dump($container->getParameter('database_password'));