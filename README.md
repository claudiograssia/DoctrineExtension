# DoctrineExtension

Module for ZF2 - Doctrine

Add function to Doctrine for sqlite 

STRFTIME

```php
$entityManager->getConfiguration()->addCustomDatetimeFunction('STRFTIME', "DoctrineExtension\CustomFunction\Sqlite\Strftime");
```
# Installation
With [Composer](http://getcomposer.org/), to include this library into your
dependencies, you need to require 

```json
{
  "require": {
    "claudiograssia/doctrineextension": "dev-master"
  }
}
