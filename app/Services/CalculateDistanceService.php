<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class CalculateDistanceService
{
    const VM_API_KEY = '2a549e9d588f70590da10665c733e5c5f0f0961393c3374c';
    // const VM_API_KEY = 'b351baf1a7da8fcbb75a4a480e849ae4a8b7e48d1d1ff046';
    const ROUTE_API_URL = 'https://maps.vietmap.vn/api/route';
    const SEARCH_API_URL = 'https://maps.vietmap.vn/api/search';

    /**
     * @var Client
     */
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @param $address
     * @return string|null
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getGeoCodeFromAddress($address)
    {
        $response = $this->client->get(self::SEARCH_API_URL, [
            'query' => [
                'text' => $address,
                'apikey' => self::VM_API_KEY,
                'api-version' => 1.1,
            ],
        ]);

        if ($response->getStatusCode() == 200) {
            $content = $response->getBody()->getContents();
            $output = json_decode($content);

            if (!empty($output->data->features[0])) {
                $coordinates = $output->data->features[0]->geometry->coordinates;

                if (!empty($coordinates)) {
                    return $coordinates[1] . ',' . $coordinates[0];
                }
            }
        }

        return null;
    }

    /**
     * @param $addressFrom
     * @param $addressTo
     * @return array|null
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getDistanceByMatrix($addressFrom, $addressTo): ?array
    {
        $geocodeFrom = $this->getGeoCodeFromAddress($addressFrom);
        $geocodeTo = $this->getGeoCodeFromAddress($addressTo);

        $response = Http::get(self::ROUTE_API_URL . "?apikey=" . self::VM_API_KEY . "&point=" . $geocodeFrom . "&point=" . $geocodeTo . "&api-version=1.1&vehicle=bike")->json();

        if ($response["code"] == "OK") {

            if (isset($response["paths"])) {

                $paths = $response["paths"];

                if (count($paths) > 0) {

                    $distance = $paths[0]["distance"];
                    $duration = $paths[0]["time"];

                    $distance = round($distance / 1000, 2 ); // convert meter to kilometer
                    $duration = round($duration / 60 / 1000, 2); // convert seconds to minute

                    return [$distance, $duration];
                }
            }
        }

        return null;
    }
}
