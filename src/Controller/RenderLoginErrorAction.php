<?php

namespace ID90\Controller;

use ID90\Http\View;

/**
 * Class RenderLoginErrorAction
 */
class RenderLoginErrorAction extends AppController
{
    public function __invoke()
    {
        $view = new View('login_error');
        $view->render();
    }
}
