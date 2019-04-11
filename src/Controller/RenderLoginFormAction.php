<?php

namespace ID90\Controller;

use ID90\Http\Request;
use ID90\Http\View;

/**
 * Class LoginAction
 */
final class RenderLoginFormAction extends AppController
{
    /**
     * @param Request $request
     */
    public function __invoke(Request $request)
    {
        $airlines = $this
            ->getID90ApiClient()
            ->listAirlines()
        ;

        $view = new View('login');
        $view
            ->assign('airlines', $airlines)
            ->render()
        ;
    }
}
