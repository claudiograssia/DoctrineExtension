# DoctrineExtension

Module for ZF2 - Doctrine

Add function to Doctrine for sqlite 

STRFTIME

```php
$entityManager->getConfiguration()->addCustomDatetimeFunction('STRFTIME', "DoctrineExtension\CustomFunction\Sqlite\Strftime");
```
# Installation
```json
{
  "require": {
    "claudiograssia/doctrineextension": "dev-master"
  }
}
