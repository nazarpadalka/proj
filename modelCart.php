<?php
require_once 'model.php';
/**
 * Doc-блок здесь
 */
class ModelCart extends model
{
	public function run($input){
        $str =  $this->getString($input);
        $PreCrash = $this->stringToArr($str);
        $mapped = $this->mapping($PreCrash);
        $sorted = $this->sorting($mapped);
        $unmapped = $this->unmapping($sorted);
        $sortedString = $this->arrToString($unmapped);
        return $sortedString;
	}

    function getString ($input){
        return $str = $input;
    }

    function stringToArr ($str){
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

    function mapping ($PreCrash){
        return  str_replace (array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A', '1'),
            array('b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'a'),
            $PreCrash);
    }

    function unmapping ($sorted){
        return  str_replace(array('b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'a'),
            array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A', '1'),
            $sorted);
    }

    function sorting ($mapped){

        sort($mapped);
        return $mapped;
    }

    function arrToString($unmapped){

    return implode(",", $unmapped);
    }
    
}
