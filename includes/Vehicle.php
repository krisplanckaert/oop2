<?php

/*
 * vehicle class
 */

/**
 * Description of Vehicle
 *
 * @author Xavier Dekeyster
 */
class Vehicle {
    
    /*** define public color ***/
    public $color;
    /*** define public num_doors ***/
    public $num_doors;
    /*** define public price ***/
    public $price;
    /*** define public shape ***/
    public $shape;
    /*** define public brand ***/
    public $brand;
    
    /*** define public methods ***/
    
    /**
     * echo the price
     */
    public function showPrice ()
    {
        echo 'This vehicle costs ' . $this->getPrice() . '<br />';
    }
    
    /**
     * echo num doors
     */
    public function numDoors ()
    {
        echo 'This vehicle has ' . $this->getNumDoors() . ' doors.<br />';
    }
    
    /**
     * echo VROOOM
     */
    public function drive ()
    {
        echo '<strong>VROOOOOM</strong>';
    }
    
    /*** setters ***/
    
    /**
     * Set the color of the vehicle
     * @param string $color
     * @throws Exception
     */
    public function setColor ($color)
    {
        if (null === $color){
            throw new Exception('No color!');
        }
        
        $this->color = $color;
        
    }
    /**
     * 
     * @param string $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
    /**
     * 
     * @param integer $numDoors
     */
    public function setNumDoors ($numDoors)
    {
        $this->num_doors = $numDoors;
    }
    /**
     * 
     * @param float $price
     */
    public function setPrice ($price)
    {
        $this->price = $price;
    }
    /**
     * 
     * @param string $shape
     */
    public function setShape ($shape)
    {
        $this->shape = $shape;
        
    }
    
    /*** getters ***/
    /**
     * 
     * @return string
     */
    public function getColor ()
    {
        if ($this->color === 'White') {
            $this->color = 'Red';
        }
        
        return $this->color;
    }
    
    /**
     * 
     * @return integer
     */
    public function getNumDoors ()
    {
        return $this->num_doors;
    }
    
    /**
     * 
     * @return float
     */
    public function getPrice ()
    {
        return $this->price;
    }
     

    
}

?>
