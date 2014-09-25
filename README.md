DoctrineExtension
=================

Add function to Doctrine for sqlite 

STRFTIME

$entityManager->getConfiguration()->addCustomDatetimeFunction('STRFTIME', "DoctrineExtension\CustomFunction\Sqlite\Strftime");
