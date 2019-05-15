<?php


namespace TechNoirBreakfastClub\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use TechNoirBreakfastClub\GuzzleGzipRequestMiddleware\GzipMiddleware;
use PHPUnit\Framework\TestCase;

final class GzipMiddlewareTest extends TestCase
{

    /**
     * Test to make sure gzip in headers
     *
     * NOTE: The history middleware will not allow me to view
     * appended headers. I have put in a work-around that allows for
     * certain headers to be visible if the request was sent with gzip
     * inside the request headers. It uses Postman Echo.
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function testHasGzipInHeaders(): void
    {
        $stack = HandlerStack::create();
        $stack->push(new GzipMiddleware());
        $client = new Client(['handler' => $stack]);
        $res = $client->request('GET', 'https://postman-echo.com/get');
        $this->assertContains('gzip', $res->getHeader('x-encoded-content-encoding'));
    }

}
