<?php
class Circle
{
    public $radius;
    public $name;
    public function __construct($name, $radius)
    {
        $this->radius = $radius;
        $this->name = $name;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }
}