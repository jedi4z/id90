<?php

namespace ID90\Controller;

use ID90\Http\View;

/**
 * Class SearchHotelAction
 */
final class RenderHotelSearcherAction extends AppController
{
    public function __invoke()
    {
        $view = new View('hotels');
        $view->render();
    }
}
