<?php
/**
 * Class User
 */
class User {
    protected $_username;

      public function __construct($name) {
        $this->_username = $name;
    }

    public function getUsername() {
        return $this->_username;
    }
}

/**
 * Class Customer
 */
class Customer extends User
{
    private $_customerId;

    public function __construct($username, $customerId)
    {
        $this->_username = $username;
        $this->_customerId = $customerId;
    }

    public function getUsername()
    {
        if($this->_username == 'xavier') {
            return parent::getUsername();
        }
        else {
            return 'De gebruikersnaam is: '.$this->_username;
        }
    }
}


?>