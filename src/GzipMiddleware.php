<?php


namespace TechNoirBreakfastClub\GuzzleGzipRequestMiddleware;

use \Closure;
use Psr\Http\Message\RequestInterface;

final class GzipMiddleware
{
    public function __invoke(callable $handler): Closure
    {
        return static function (RequestInterface $request, array $options) use ($handler) {
            $request = $request->withHeader('Accept-Encoding', 'gzip');
            return $handler($request, $options);
        };
    }
}
