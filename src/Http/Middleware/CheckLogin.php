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
        if (session_status() !== PHP_SESSION_ACTIVE || session_id() === '') {
            header('Location: /');
        }
    }
}
