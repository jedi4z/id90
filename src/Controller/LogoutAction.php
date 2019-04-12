<?php

namespace ID90\Controller;

/**
 * Class LogoutAction
 */
final class LogoutAction extends AppController
{
    /**
     * Destroy the session and redirect
     * to the index.
     */
    public function __invoke()
    {
        session_start();

        session_destroy();

        header('Location: /');
    }
}
