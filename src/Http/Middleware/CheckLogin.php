<?php

namespace ID90\Http\Middleware;

/**
 * Class CheckLogin
 */
final class CheckLogin implements IMiddleware
{
    /**
     * {@inheritdoc}
     */
    public function beforeRender()
    {
        session_start();

        if (!(isset($_SESSION['id']) && $_SESSION['id'] != '')) {
            header('Location: /');
        }
    }
}
