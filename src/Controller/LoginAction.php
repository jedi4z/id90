<?php

namespace ID90\Controller;

use ID90\Config\Request;

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

        var_dump($airline, $username, $password); die;
    }
}
