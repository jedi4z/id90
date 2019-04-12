<?php

namespace ID90\Controller;

use ID90\Http\View;

/**
 * Class SearchHotelAction
 */
final class SearchHotelAction extends AppController
{
    public function __invoke()
    {
        $guests = $_GET['guests'];
        $destination = $_GET['destination'];

        list($checkIn, $checkOut) = explode('-', $_GET['daterange']);
        $checkIn = $this->formatDate($checkIn);
        $checkOut = $this->formatDate($checkOut);

        $hotels = $this
            ->getID90ApiClient()
            ->listHotel($destination, $guests, $checkIn, $checkOut);

        $view = new View('hotels_result');

        $view
            ->assign('hotels', $hotels['hotels'])
            ->assign('meta', $hotels['meta'])
            ->render();
    }

    /**
     * Format a date from d/m/Y => Y-m-d
     *
     * @param string $date
     *
     * @return string
     */
    private function formatDate(string $date): string
    {
        $date = trim($date);
        $date = \DateTime::createFromFormat('d/m/Y', $date);

        return $date->format('Y-m-d');
    }
}
