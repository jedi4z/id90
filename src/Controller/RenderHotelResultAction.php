<?php

namespace ID90\Controller;

use ID90\Http\View;

/**
 * Class RenderHotelResultAction
 */
final class RenderHotelResultAction
{
    public function __invoke()
    {
        $view = new View('hotels_result');
        $view->render();
    }
}