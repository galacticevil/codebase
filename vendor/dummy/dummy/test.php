<?php

namespace Dummy;

class testClass {
    
    public $internal = null;
    
    public function __construct($val)
    {
        $this->internal = $val;
    }
    
    public function getVal() {
        return strtoupper($this->internal);
    }
}
