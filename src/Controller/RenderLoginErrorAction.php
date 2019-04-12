<?php

namespace ID90\Controller;

use ID90\Http\View;

/**
 * Class RenderLoginErrorAction
 */
final class RenderLoginErrorAction extends AppController
{
    /**
     * Render the login error view.
     */
    public function __invoke()
    {
        $view = new View('login_error');
        $view->render();
    }
}
