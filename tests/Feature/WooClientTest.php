<?php

namespace Manuglopez\LaravelWooclient\Tests\Feature;


use Illuminate\Support\Facades\File;
use Manuglopez\LaravelWooclient\LaravelWooclient;
use Manuglopez\LaravelWooclient\LaravelWooclientFacade;
use Manuglopez\LaravelWooclient\Tests\TestCase;


class WooClientTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLaravelWooClient()
    {


        $service = $this->getMockBuilder(LaravelWooclient::class)
            ->disableOriginalConstructor()
            ->getMock();

        $service->method('get')
            ->willReturn(
                File::get(dirname(__DIR__, 1) . '/stubs/success.json')
            );
        $response=$service->get('/suscriptions',[]);

        $this->assertIsArray(json_decode($response));


    }

    public function testFacade()
    {
        $service = $this->getMockBuilder(LaravelWooclient::class)
            ->disableOriginalConstructor()
            ->getMock();

        $service->method('get')
            ->willReturn(
                File::get(dirname(__DIR__, 1) . '/stubs/success.json')
            );

        LaravelWooclientFacade::shouldReceive('get')->once()->with('/subscriptions',[]);
        LaravelWooclientFacade::get('/subscriptions',[]);

    }
}
