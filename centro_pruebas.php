<?php

    // $arr = [['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4], ['a' => 1, 'b' => 1, 'c' => 3, 'd' => 4], ['a' => 1, 'b' => 1, 'c' => 3, 'd' => 4], ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4]];

    // var_dump(array_filter($arr, function($k) {
    //     return $k == 'b';
    // }, ARRAY_FILTER_USE_KEY));
    
    // $array_filtrado = [];

    // foreach($arr as $key){
    //     if($key['b'] == 2){
    //         array_push($array_filtrado, $key);
    //     }
    // }

    // print_r($array_filtrado);

    require_once("class/producto.php");
    $obj = new producto();

    $filter_array = [];
    foreach($obj->productos as $e){
        if($e->id_categoria == 1){
            array_push($filter_array, $e);
        }
    }

    echo count($obj->productos)."<br>";
    echo count($filter_array);
    echo "<pre>";
    print_r($filter_array);
    echo "</pre>";

?>