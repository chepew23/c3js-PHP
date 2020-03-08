<?php
/*
 * Copyright (C) 2015 Raphaël Doursenaud <rdoursenaud@gpcsolutions.fr>
 */

namespace Astroanu\C3jsPHP\Charts;

/**
 * Class Scatter
 * @package Astroanu\C3jsPHP\Charts
 */
class Scatter implements \JsonSerializable
{
    /**
     * @var array
     */
    private $data = array();

    /**
     * @return array
     */
    public function JsonSerialize()
    {
        return $this->data;
    }
}
