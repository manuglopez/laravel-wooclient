<?php declare( strict_types = 1 );

namespace Manuglopez\LaravelWooclient;

use Automattic\WooCommerce\Client;
use Automattic\WooCommerce\HttpClient\HttpClientException;
use stdClass;

class LaravelWooclient
{
    protected Client $woocommerce;

    /*public function __construct(string $woocommerce_url, string $ck, string $cs, array $options)
    {

        $this->woocommerce = new  Client(
            $woocommerce_url,
            $ck,
            $cs,
            $options

        );

    }*/
    public function __construct(Client $client)
    {
        $this->woocommerce = new $client(
            config('laravel-wooclient.woocommerce_url'),
            config('laravel-wooclient.ck'),
            config('laravel-wooclient.cs'),
            config('laravel-wooclient.options')
        );
    }

    public function get($endpoint, $parameters=[]): stdClass|string
    {
        try {
            return $this->woocommerce->get($endpoint, $parameters );
        } catch (HttpClientException $e) {
            return $e->getMessage();
        }
    }

    public function post($endpoint, $data):stdClass|string
    {
        try {
            return $this->woocommerce->post($endpoint, $data);
        } catch (HttpClientException $e) {
            return $e->getMessage();
        }
    }

    public function put($endpoint, $data):stdClass|string
    {
        try {
            return $this->woocommerce->put($endpoint, $data);
        } catch (HttpClientException $e) {
            return $e->getMessage();
        }
    }

    public function delete($endpoint, $parameters = []):stdClass|string
    {
        try {
            return $this->woocommerce->put($endpoint, $parameters);
        } catch (HttpClientException $e) {
            return $e->getMessage();
        }
    }
}
