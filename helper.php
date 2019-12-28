<?php
    include 'includes/classesloader.inc.php';  // classes loader function to include_once a class which has been called
    class Helper{

    private static $instance;  // the instance which will be created depending on the data sent (hamming,levenshtein)

    public static function instantiate($type,$first,$second){  // creating an instance based on the type to determine the calculation method
        if ($type == 'Hamming')
        {
            self::$instance = new Hamming();
        }
        if ($type == 'Levenshtein')
        {
            self::$instance = new Levenshtein();
        }

        // configuring the instance to do the calculation and return the result
        
        self::$instance->setFirst($first);
        self::$instance->setSecond($second);
        return self::$instance->calculate();
    }
    }
