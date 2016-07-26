<?php

////////////////////////////////////////////////////////////

class getSting {

      var $str;

    function get_string (){
        return $str = "6B,6E,AC,QB,1B,QE,QC,JC,2E,4B";
    }
    function result(){
        echo "< /br> $mapping->precrash< /br>";
    }
}

////////////////////////////////////////////////////////////

class prepareString {

    var $PreCrash;
    var $Crashed;

    function string_to_arr ($str){
        return explode(",", $str);
    }
    function crash_arr ($PreCrash){
        $Crashed = array();
        foreach ($PreCrash as $str) {
            $m = $str[strlen($str) - 1];
            $str = str_replace($m, '', $str);
            $Crashed[] = array("m" => "$m", "d" => $str);
        }
        return $Crashed;
    }

}

class mapping {

    var $PreCrash;
    var $sorted;



    function mapping ($PreCrash){
        return  str_replace (array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A', '1'),
                             array('b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'a'), $PreCrash);
    }

    function unmapping ($sorted){
        return  str_replace(array('b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'a'),
                            array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A', '1'), $sorted);
    }
    
    
}

class sorting {

    var $sorted;
    var $mapped;

    function sorting ($mapped){
        return  sort($mapped);
    }
}
////////////////////////////////////////////////////////////