<?php

namespace ID90\Controller;

use ID90\Http\Request;
use ID90\Http\View;

/**
 * Class RenderLoginErrorAction
 */
class RenderLoginErrorAction extends AppController
{
    /**
     * @param Request $request
     */
    public function __invoke(Request $request)
    {
        $view = new View('login_error');
        $view->render();
    }
}
