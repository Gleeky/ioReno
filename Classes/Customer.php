<?php

 
class Customer {
    
    private $id;
    private $name;
    private $email;
    private $phone;
    private $password;
    private $date;
    
    function __construct($i, $n, $e, $p, $pass, $d) {
        $this->id=$i;
        $this->name=$n;
        $this->email=$e;
        $this->phone=$p;
        $this->password=$pass;
        $this->date=$d;
    }
    public function get_id()
    {
        return $this->id;
    }
    public function get_name()
    {
        return $this->name;
    }
    public function get_email()
    {
        return $this->email;
    }
    public function get_phone()
    {
        return $this->phone;
    }
    public function get_password()
    {
        return $this->password;
    }
    public function get_date()
    {
        return $this->date;
    }
}
?>
