<?php

namespace ID90\Controller;

use ID90\Http\Request;
use ID90\Http\View;

/**
 * Class SearchHotelAction
 */
final class RenderHotelSearcher extends AppController
{
    /**
     * @param Request $request
     */
    public function __invoke(Request $request)
    {
        $this->beforeRender();

        $view = new View('hotels');
        $view->render();
    }
}
