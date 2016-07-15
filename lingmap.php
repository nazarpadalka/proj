<?php


$str = '';
$str =  get_string();
$PreCrash =  string_to_arr($str);
$mapped = mapping($PreCrash);
$sorted = sorting($mapped);
$unmapped = unmap($sorted);


function get_string () {
    $str = "6B,10E,AC,QB,1B,QE,QC";
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
        // var_dump($nominal);
         }
    return $Crashed;
    }

function mapping($PreCrash){

  //  var_dump($PreCrash);
    //$MappingNumbersNom = array('1000', '2000', '3000', '4000', '5000', '6000', '7000', '8000', '9000', '10000', '11000', '12000', '13000', '14000');
    //$CardNominal = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "j", "q", "k", "a");

    // $nominal = str_replace(array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'), array('1000', '2000', '3000', '4000', '5000', '6000', '7000', '8000', '9000', '10000', '11000', '12000', '13000', '14000'), $PreCrash);
    $PreCrash = str_replace(array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A', '1'), array('b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'a'), $PreCrash);

  //  var_dump($PreCrash);
    return ($PreCrash);
}

function unmap($sorted){

    $unmapped = str_replace(array('b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'a'), array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A', '1'), $sorted);

      var_dump($unmapped);
    return ($unmapped);
}



function sorting($mapped){
   // var_dump($mapped);
   sort($mapped);
    $sorted = $mapped;

  //  var_dump($sorted);
    return ($sorted);

    }
?>

