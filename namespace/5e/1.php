<?php
namespace Elektronik\Komputer;
class Laptop{
    private $merek;
    public function __construct($merek)
    {
        $this->merek = $merek;
    }
    public function getInfo()
    {
        return "Laptop merek $this->merek";
    }
}