<?php

namespace ID90\Controller;

use ID90\Service\ID90ApiClient;
use ID90\Http\Middleware\IMiddleware;

/**
 * Class AppController
 */
abstract class AppController
{
    /**
     * Constructor.
     *
     * @param IMiddleware|null $middleware
     */
    public function __construct(IMiddleware $middleware = null)
    {
        if ($middleware) {
            $middleware->beforeRender();
        }
    }

    /**
     * Get an instance of ID90ApiClient.
     *
     * @return ID90ApiClient
     */
    protected function getID90ApiClient(): ID90ApiClient
    {
        return new ID90ApiClient();
    }
}
