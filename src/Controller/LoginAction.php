<?php

namespace ID90\Controller;

/**
 * Class AuthenticateUserAction
 */
final class LoginAction extends AppController
{
    public function __invoke()
    {
        $airline = $_POST['airline'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $rememberMe = 0;

        if (array_key_exists('remember_me', $_POST)) {
            $rememberMe = $_POST['remember_me'];
        }

        try {
            $response = $this
                ->getID90ApiClient()
                ->login($airline, $username, $password, $rememberMe);

            session_start();

            $_SESSION['id'] = $response['member']['id'];
            $_SESSION['username'] = $response['member']['username'];

            header('Location: /secure/hotels/searcher');
        } catch (\Exception $e) {
            header('Location: /auth/error');
        }
    }
}
