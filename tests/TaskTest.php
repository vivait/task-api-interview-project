<?php

namespace App\Tests;

use App\Kernel;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use function json_decode;

class TaskTest extends WebTestCase
{
    public function testSomething(): void
    {
        self::createKernel();
        $client = static::createClient();
        $client->request('GET', '/');

        self::assertSame([], json_decode($client->getResponse()->getContent()));
    }

    protected static function getKernelClass(): string
    {
        return Kernel::class;
    }
}
