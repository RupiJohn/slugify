# Slugify my test

```php
<?php
require 'vendor/autoload.php';
use Rupijohn\Slugify\MyURL;

$url = new \Rupijohn\Slugify\MyURL();
echo $url->slugify('','');
```