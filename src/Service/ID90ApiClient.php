<?php

namespace ID90\Service;

use GuzzleHttp\RequestOptions;
use GuzzleHttp\Client as HttpClient;

/**
 * Class ID90ApiClient
 */
class ID90ApiClient
{
    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->httpClient = new HttpClient(
            [
                'base_uri' => 'https://beta.id90travel.com'
            ]
        );
    }

    /**
     * Get a list of airlines.
     *
     * @return array
     */
    public function listAirlines(): array
    {
        $response = $this->httpClient->get(
            '/airlines',
            [
                RequestOptions::HEADERS => [
                    'Accept' => 'application/json',
                ]
            ]
        );

        return json_decode(
            $response->getBody()->getContents(),
            true
        );
    }
}
