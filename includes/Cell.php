<?php

class Cell {
    protected $_content; // binnen huidige en child classes beschikbaar

    public function __construct($content)
    {
        $this->_content = $content;
    }

    public function getContent ()
    {
        return $this->_content;
    }
}

?>
