<?php

namespace ID90\Service;

use GuzzleHttp\RequestOptions;
use GuzzleHttp\Client as HttpClient;
use Psr\Http\Message\ResponseInterface;

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
                'base_uri' => getenv('ID90_BASE_URI')
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

        return $this->responseToArray($response);
    }

    /**
     * Authenticate a user.
     *
     * @param string $airline
     * @param string $username
     * @param string $password
     * @param bool $rememberMe
     *
     * @return array
     */
    public function login(
        string $airline,
        string $username,
        string $password,
        bool $rememberMe
    ): array {
        $response = $this->httpClient->post(
            '/session.json',
            [
                RequestOptions::HEADERS => [
                    'Accept' => 'application/json',
                ],
                RequestOptions::QUERY => [
                    'session' => [
                        'airline' => $airline,
                        'username' => $username,
                        'password' => $password,
                        'remember_me' => $rememberMe,
                    ]
                ]
            ]
        );

        return $this->responseToArray($response);
    }

    /**
     * List all hotels.
     *
     * @param string $destination
     * @param int $guests
     * @param string $checkIn
     * @param string $checkOut
     * @param string $page
     *
     * @return array
     */
    public function listHotel(
        string $destination,
        int $guests,
        string $checkIn,
        string $checkOut,
        string $page
    ): array {
        $response = $this->httpClient->get(
            '/api/v1/hotels.json',
            [
                RequestOptions::HEADERS => [
                    'Accept' => 'application/json',
                ],
                RequestOptions::QUERY => [
                    'destination' => $destination,
                    'guests[]' => $guests,
                    'checkin' => $checkIn,
                    'checkout' => $checkOut,
                    'sort_criteria' => 'Overall',
                    'sort_order' => 'desc',
                    'page' => $page,
                ]
            ]
        );

        return $this->responseToArray($response);
    }

    /**
     * Convert a response to array.
     *
     * @param $response
     *
     * @return array
     */
    private function responseToArray(ResponseInterface $response): array
    {
        return json_decode(
            $response->getBody()->getContents(),
            true
        );
    }
}
