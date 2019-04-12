<?php

namespace ID90\Controller;

use ID90\Http\View;

/**
 * Class SearchHotelAction
 */
final class RenderHotelSearcherAction extends AppController
{
    /**
     * Render the searcher view.
     */
    public function __invoke()
    {
        $view = new View('searcher');
        $view->render();
    }
}
