<?php


/**
 *
 * @author Xavier Dekeyster
 */
class Table {
    private $_rows;

    public function __construct()
    {
        $this->_rows = array();
    }

    /**
     *
     * @param string $rows
     */
    public function append ($rows)
    {
        $this->_rows[] = $rows;
    }

    public function draw ()
    {
        echo '<table border="1">'.PHP_EOL;
            foreach ($this->_rows as $row) {
                echo '<tr>'.PHP_EOL;
                    foreach ($row->getCells() as $cell) {
                        echo '<td>'. $cell->getContent().'</td>'.PHP_EOL;
                    }
                echo '</tr>'.PHP_EOL;
            }

        echo '</table>'.PHP_EOL;

    }
}

?>
