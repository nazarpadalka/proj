<?php



$str =  get_string();
$PreCrash =  string_to_arr($str);
$mapped = mapping($PreCrash);
$sorted = sorting($mapped);
$unmapped = unmap($sorted);




function get_string () {
    $str = "6B,6E,AC,QB,1B,QE,QC,JC,2E,4B";
    return $str;
}

function string_to_arr ($str){
    $PreCrash = explode(",", $str);
    return $PreCrash;
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

function mapping($PreCrash){
    $PreCrash = str_replace(array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A', '1'), array('b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'a'), $PreCrash);
    return ($PreCrash);
}

function unmap($sorted){
    $unmapped = str_replace(array('b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'a'), array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A', '1'), $sorted);
    return ($unmapped);
}

function sorting($mapped){
    sort($mapped);
    $sorted = $mapped;
    return ($sorted);
    }
?>

