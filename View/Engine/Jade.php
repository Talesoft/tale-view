<?php

namespace Tale\View\Engine;

use Tale\Jade\Renderer;
use Tale\View\EngineInterface;

class Jade implements EngineInterface
{

    private $renderer;

    public function __construct(array $options = null)
    {

        $this->renderer = new Renderer($options);
    }

    public function render($path, array $args = null)
    {

        return $this->renderer->render($path, $args);
    }
}