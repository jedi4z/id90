<?php

namespace ID90\Controller;

/**
 * Class LogoutAction
 */
final class LogoutAction extends AppController
{
    public function __invoke()
    {
        session_start();

        session_destroy();

        header('Location: /');
    }
}
