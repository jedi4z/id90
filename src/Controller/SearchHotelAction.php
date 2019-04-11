<?php

namespace ID90\Controller;

/**
 * Class SearchHotelAction
 */
final class SearchHotelAction
{
    public function __invoke()
    {
        list($checkIn, $checkOut) = explode('-', $_GET['daterange']);

        $guests = $_GET['guests'];
        $destination = $_GET['destination'];
        $checkIn = $this->formatDate($checkIn);
        $checkOut = $this->formatDate($checkOut);

        var_dump($guests, $destination, $checkIn, $checkOut);

        die;
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
