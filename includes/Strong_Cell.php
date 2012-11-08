<?php
class Strong_Cell extends Cell
{
    public function getContent()
    {
        return '<strong>'.$this->_content.'</strong>';
    }
}
?>