<?php


$str = '';
$str =  get_string();
$PreSort =  string_to_arr($str);
$Sorting =  crash_arr($PreSort);
$mast= mastF($PreSort);
$Answer = sort_arr_1($Sorting, $mast);


function get_string () {
    $str = "6B,10E,AC,QB,1B";
    return $str;
}

function string_to_arr ($str){
    $PreSort = explode ( "," , $str);
    return $PreSort;
}
function crash_arr ($PreSort){
    $Sorting = array ();
    foreach ($PreSort as $str) {
        $m = $str[strlen($str)-1];
        $str = str_replace($m, '', $str);
        $Sorting[]= array("m" => "$m", "d"=>$str);
    }
    return $Sorting;
}


function mapping(){


    2 = 2000;
    3 = 3000;
    4 = 4000;
    5 = 5000;
    6 = 6000;
    7 = 7000;
    8 = 8000;
    9 = 9000;
    10 = 10000;
    j = 11000;
    q = 12000;
    k = 13000;
    a = 14000;
}


function mastF ($PreSort)
{
    $i = 0;
    foreach ($PreSort as $str) {
        $m = $str[strlen($str) - 1];
        $mast[] = $m;
    }

    sort($mast);
    $mast = array_unique($mast);
    $mast1 = array();

    foreach ($mast as $e) {
        $mast1[] = $e;
    }

    return ($mast1);
}


function sort_arr_1 ($Sorting, $mast){
    $i=0;
    $Answer = array();
    $temp_arr = array();
    $caching_arr = array();
    $spike = array();

    sort($Sorting);

    foreach ($Sorting as $mini_arr){
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