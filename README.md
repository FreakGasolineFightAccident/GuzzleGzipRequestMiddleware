# Guzzle Gzip Request Middleware

[![CircleCI](https://circleci.com/gh/TechNoirBreakfastClub/GuzzleGzipRequestMiddleware.svg?style=shield)](https://circleci.com/gh/TechNoirBreakfastClub/GuzzleGzipRequestMiddleware)

#### Installation with Composer

```bash
composer require tech-noir-breakfast-club/guzzle-gzip-request-middleware
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
```

![](https://i.gifer.com/Klwf.gif)
