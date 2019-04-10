<?php

namespace ID90\Controller;

use ID90\Config\View;

/**
 * Class LoginAction
 */
final class LoginAction extends AppController
{
    public function __invoke($request)
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
