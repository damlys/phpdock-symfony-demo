<?php

namespace App\Tests\HttpApiTests;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\HttpClient;

class HelloTest extends TestCase
{
    public function testMessage(): void
    {
        $client = HttpClient::create();

        $response = $client->request('GET', "{$_ENV['HTTP_API_TESTS_ENTRYPOINT']}/hello");
        $payload = $response->toArray();

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('application/json', array_shift($response->getHeaders()['content-type']));
        $this->assertEquals('Hello!', $payload['message']);
    }
}
