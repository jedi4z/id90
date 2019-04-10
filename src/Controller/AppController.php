<?php

namespace ID90\Controller;

use ID90\Service\ID90ApiClient;

/**
 * Class AppController
 */
abstract class AppController
{
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
