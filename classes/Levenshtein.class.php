<?php
class Levenshtein implements Distance{

    // first and second strings to calculate distance

    private $first;
    private $second;

    // getters and setters for our private properties
    
    public function setFirst($str)
    {
        $this->first = $str;
    }
    public function setSecond($str)
    {
        $this->second = $str;
    }
    public function getFirst()
    {
        return $this->first;
    }
    public function getSecond()
    {
        return $this->second;
    }

    //calculating levenshtein distance

    public function calculate()
    {
        $first  = $this->getFirst();
        $second  = $this->getSecond();
        return levenshtein($first,$second);
    }

}