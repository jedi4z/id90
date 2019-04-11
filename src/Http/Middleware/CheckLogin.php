<?php

namespace ID90\Http\Middleware;

/**
 * Class CheckLogin
 */
final class CheckLogin
{
    /**
     * {@inheritdoc}
     */
    public function __invoke()
    {
        session_start();

        if (!isset($_SESSION['id'])) {
            header('location: /');
            exit();
        }
    }
}
