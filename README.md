# PHP HCaptcha

Server side verification package

## Quick Start 

1. Require Package

```bash
composer require neverbehave/hcaptcha
```

2. Create an instance
```php
$hcaptcha = new neverbehave\Hcaptcha('Your API KEY');

// Generate Challenge
// Instance of HcaptchaResponse
$client_challenge1 = $hcaptcha->challenge('Response');
$client_challenge2 = $hcaptcha->challenge('Another Response', 'Client IP');

// Read Result
if ($client_challenge1->isSuccess()) {
    // Do Something
} else {
    // Read Error
    $client_challenge1->getErrors();
}

// Get Raw Response 
$client_challenge2->getRaw();
```

## Reference 

https://docs.hcaptcha.com/
