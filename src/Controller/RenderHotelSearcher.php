<?php

namespace ID90\Controller;

use ID90\Http\View;
use ID90\Http\Request;

/**
 * Class SearchHotelAction
 */
final class RenderHotelSearcher extends AppController
{
    public function __invoke(Request $request)
    {
        $view = new View('hotels');
        $view->render();
    }
}
