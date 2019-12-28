<?php
class Hamming implements Distance{

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

    // credits for nitin mittal on geeksforgeeks.org

    public function calculate()
    {
        $first  = $this->getFirst();
        $second  = $this->getSecond();
        $i     = 0;
        $count = 0;
        while (isset($first[$i]) != '')
        {
            if ($first[$i] != $second[$i])
            {
                $count++;
            }
            $i++;
        }
        return $count;
    }
}