<?php

namespace ID90\Controller;

use ID90\Http\View;

/**
 * Class SearchHotelAction
 */
final class SearchHotelAction extends AppController
{
    /**
     * Send a query to ID90 API to get
     * the hotels and showed it in the view.
     */
    public function __invoke()
    {
        $guests = $_GET['guests'];
        $daterange = $_GET['daterange'];
        $destination = $_GET['destination'];
        $page = $_GET['page'];

        list($checkIn, $checkOut) = explode('-', $daterange);
        $checkIn = $this->formatDate($checkIn);
        $checkOut = $this->formatDate($checkOut);

        $hotels = $this
            ->getID90ApiClient()
            ->listHotel($destination, $guests, $checkIn, $checkOut, $page);

        $view = new View('hotels_result');

        $view
            ->assign('destination', $destination)
            ->assign('daterange', $daterange)
            ->assign('guests', $guests)
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
