<?php

////////////////////////////////////////////////////////////

class getSting {

    public function get_string (){
        return $this->str = "6B,6E,AC,QB,1B,QE,QC,JC,2E,4B";
    }
    public function result(){
        echo "< /br> $mapping->precrash< /br>";
    }
}

////////////////////////////////////////////////////////////

class prepareString {

    public $PreCrash;
    public $Crashed;

    public function string_to_arr ($str){
        return explode(",", $str);
    }
    public function crash_arr ($this->PreCrash){
        $$this->Crashed = array();
        foreach ($PreCrash as $str) {
            $m = $str[strlen($str) - 1];
            $str = str_replace($m, '', $str);
            $$this->Crashed[] = array("m" => "$m", "d" => $str);
        }
        return $this->Crashed;
    }

}

class mapping {

    public  $PreCrash;
    public  $sorted;

    public function mapping ($PreCrash){
        return  str_replace (array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A', '1'),
                             array('b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'a'),
                             $PreCrash);
    }
    public function unmapping ($sorted){
        return  str_replace(array('b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'a'),
                            array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A', '1'),
                            $sorted);
    }
}

class sorting {

    public  $sorted;
    public  $mapped;

    public function sorting ($mapped){
        return  sort($mapped);
    }
}
////////////////////////////////////////////////////////////
/*
$getString = new getString();
$prepareString = new prepareString();
$mapping =new mapping();
$sorting = new sorting;
*/


