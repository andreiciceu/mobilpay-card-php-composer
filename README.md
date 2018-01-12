PHP_CARD
========
Composer project for MobilPay.ro card payment.
Can be used with Symfony Framework (tested with Symfony 3.3)
Sources from: https://github.com/mobilpay/PHP_CARD

## Installation
Update your project's composer.json file like this
```
...
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/andreiciceu/mobilpay-card-php-composer.git"
    }
],
"require": {
    ...
    "mobilpay/PHP_CARD": "dev-master",
    ...
}
```
Then run `composer update`

## Usage
```
<?php

use Mobilpay\Payment\Request\Mobilpay_Payment_Request_Card;

$cardPayRequest = new Mobilpay_Payment_Request_Card()
```
Check examples for more details; keep in mind to
<b>NOT IMPORT/REQUIRE</b> files, rather import them using `use ClassName` at the top of the file  


