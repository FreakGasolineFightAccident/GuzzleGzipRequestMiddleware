# Guzzle Gzip Request Middleware

#### Installation

```bash
composer require 
```

##### Create Guzzle Client with Gzip Middleware

```php
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use TechNoirBreakfastClub\GuzzleGzipRequestMiddleware\GzipMiddleware;

$stack = HandlerStack::create();
$stack->push(new GzipMiddleware());

$client = new Client([$stack]);

// Make requests galore...
