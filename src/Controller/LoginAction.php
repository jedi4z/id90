<?php

namespace ID90\Controller;

use ID90\Config\View;

/**
 * Class LoginAction
 */
final class LoginAction
{
    public function __invoke($request)
    {
        $view = new View('login');
        $view
            ->assign('foo', 'bar')
            ->assign('bar', 'foo')
            ->render()
        ;
    }
}
