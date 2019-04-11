<?php

namespace ID90\Controller;

use GuzzleHttp\Exception\ConnectException;
use ID90\Http\Request;

/**
 * Class AuthenticateUserAction
 */
final class LoginAction extends AppController
{
    /**
     * @param Request $request
     */
    public function __invoke(Request $request)
    {
        $data = $request->getBody();
        $airline = $data['airline'];
        $username = $data['username'];
        $password = $data['password'];
        $rememberMe = 0;

        if (array_key_exists('remember_me', $data)) {
            $rememberMe = $data['remember_me'];
        }

        try {
            $response = $this
                ->getID90ApiClient()
                ->login($airline, $username, $password, $rememberMe);

            session_start();

            $_SESSION['id'] = $response['member']['id'];
            $_SESSION['username'] = $response['member']['username'];
            $_SESSION['first_name'] = $response['member']['first_name'];
            $_SESSION['last_name'] = $response['member']['last_name'];
            $_SESSION['email'] = $response['member']['email'];

            header('Location: /');
        } catch (ConnectException $e) {
            header('Location: /login/error');
        }
    }
}
