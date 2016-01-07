# sysexits
PHP Implementation of sysexits.h

## Usage


### As namespaced class

```php
<?php

// composer autoload or require `assimtech/sysexits/src/Sysexits.php`

use Assimtech\Sysexits;

// Parse argv or something
if ($badUsage) {
    return Sysexits::EX_USAGE;
}

return Sysexits::EX_OK;
```


### As defines

```php
<?php

require_once `assimtech/sysexits/sysexits.php`

// Parse argv or something
if ($badUsage) {
    return EX_USAGE;
}

return EX_OK;
```
