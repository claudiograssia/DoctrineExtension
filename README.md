DoctrineExtension
=================

Module for ZF2 - Doctrine

Add function to Doctrine for sqlite 

STRFTIME

$entityManager->getConfiguration()->addCustomDatetimeFunction('STRFTIME', "DoctrineExtension\CustomFunction\Sqlite\Strftime");
