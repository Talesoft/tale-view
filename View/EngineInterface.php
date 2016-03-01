<?php

namespace Tale\View;

interface EngineInterface
{

    public function render($path, array $args = null);
}