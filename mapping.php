<?php


$str = '';
$str =  get_string();
$PreCrash =  string_to_arr($str);
$Crashed =  crash_arr($PreCrash);
$nominal = nominalF($PreCrash);
$mast= mastF($PreCrash);
//$mappedMast = mappingMast($mast);
$mappedNominal = mappingNomin($nominal);
$Answer = sort_arr_1($Crashed, $mast);

//var_dump($mappedNominal);



function get_string () {
    $str = "6B,10E,AC,QB,1B";
    return $str;
}

function string_to_arr ($str){
    $PreCrash = explode ( "," , $str);
    return $PreCrash;
}
function crash_arr ($PreCrash){
    $Crashed = array ();
    foreach ($PreCrash as $str) {
        $m = $str[strlen($str)-1];
        $str = str_replace($m, '', $str);
        $Crashed[]= array("m" => "$m", "d"=>$str);
        $nominal[] = array ("d"=>$str);
       // var_dump($nominal);
    }
    return $Crashed;
}


function mappingNomin($nominal){

    var_dump($nominal);
    //$MappingNumbersNom = array('1000', '2000', '3000', '4000', '5000', '6000', '7000', '8000', '9000', '10000', '11000', '12000', '13000', '14000');
   //$CardNominal = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "j", "q", "k", "a");

   // $nominal = str_replace(array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'), array('1000', '2000', '3000', '4000', '5000', '6000', '7000', '8000', '9000', '10000', '11000', '12000', '13000', '14000'), $nominal);
    $nominal = str_replace(array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A', '1'), array('b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'a'), $nominal);

    var_dump($nominal);
    return ($nominal);
    }
/*
function mappingMast($mast){

    $MappingNumbersMast = array('100000', '200000', '300000', '400000');
    $CardMasts = array ('b', 'c', 'd', 'e');


    str_replace($CardMasts, $MappingNumbersMast, $mast);
    return($mast);
    }



function nominalF($PreCrash){
    {
        $i = 0;
        foreach ($PreCrash as $str) {
            $m = $str[strlen($str)-1];
            $str = str_replace($m, '', $str);
            $nominal[] = ($str);
        }
       // var_dump($nominal);
        return ($nominal);
    }


}
*/

function mastF ($PreCrash)
{
    $i = 0;
    foreach ($PreCrash as $str) {
        $m = $str[strlen($str) - 1];
        $mast[] = $m;
    }
  //  var_dump($mast);
    return ($mast);
}


function sort_arr_1 ($Crashed, $mast){
    $i=0;
    $Answer = array();
    $temp_arr = array();
    $caching_arr = array();
    $spike = array();

    sort($Crashed);

    foreach ($Crashed as $mini_arr){
        if ($mini_arr["m"] == $mast[$i]){

            // var_dump($caching_arr);
            array_push($temp_arr, $caching_arr);
            array_push($temp_arr, $mini_arr);
        }else{
            $caching_arr = $mini_arr;

            sort ($temp_arr);
            array_push($Answer, $temp_arr);
            $temp_arr = $spike;
            $i++;
        }
    }
    // print_r($Answer);
    return $Answer;
}

?>