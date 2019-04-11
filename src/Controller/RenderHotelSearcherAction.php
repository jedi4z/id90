<?php

namespace ID90\Controller;

use ID90\Http\View;
use ID90\Http\Request;

/**
 * Class SearchHotelAction
 */
final class RenderHotelSearcherAction extends AppController
{
    /**
     * @param Request $request
     */
    public function __invoke(Request $request)
    {
        $this->loginRequired();

        $view = new View('hotels');
        $view->render();
    }
}
