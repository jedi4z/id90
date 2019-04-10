<?php

namespace ID90\Config;

/**
 * Class View
 */
class View
{
    /**
     * @var array
     */
    private $data = [];

    /**
     * @var bool|string
     */
    private $render = false;

    /**
     * Constructor.
     *
     * @param $template
     */
    public function __construct($template)
    {
        try {
            $file = dirname(__DIR__) . '/Template/' . strtolower($template) . '.php';

            if (file_exists($file)) {
                $this->render = $file;
            } else {
                throw new \Exception('Template ' . $template . ' not found!');
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Assign a variable to template.
     *
     * @param $variable
     * @param $value
     *
     * @return View
     */
    public function assign($variable, $value): self
    {
        $this->data[$variable] = $value;

        return $this;
    }

    /**
     * Render a template
     */
    public function render()
    {
        extract($this->data);

        include($this->render);
    }
}
