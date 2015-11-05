<?php
namespace Zinio\Example;

class Student
{
    private $id;
    private $name;
    // private $birthday;
    private $email;
    private $phone;

    public function set($prop, $value)
    {
        if (property_exists($this, $prop)) {
            $this->$prop = $value;
        } else {
            throw new \Exception('Property dosen\'t exist');
        }
    }

    public function get($prop)
    {
        if (property_exists($this, $prop)) {
            return $this->$prop;
        }
        throw new \Exception('Property dosen\'t exist');
    }
}