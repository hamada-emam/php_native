<?php

namespace  App\Http\Controllers;

use App\Http\Controllers\Controller;

class TestPHPController extends Controller
{
    #--------------------array_merge_recursive----------------
    public  $ar1 = array(
        "color" => array(
            "favorite" => "red",
            'blue' =>  "blue"
        ),
        5,
    );
    public   $ar2 = array(
        10,
        "color" => array(
            "favorite" => "green",
            'blue' =>  "blue"
        )
    );
    public  $arrays = [array(
        10,
        "color" => array(
            "favorite" => "green",
            'blue' =>  "blue"
        )
    ), array(
        "color" => array(
            "favorite" => "red",
            'blue' =>  "blue"
        ),
        5,
    ), array(
        "color" => array(
            "favorite" => "red",
            'blue' =>  "blue"
        ),
        5,
    ), array(
        "color" => array(
            "favorite" => "red",
            'blue' =>  "blue"
        ),
        5,
    )];
    public function arrayMergeRecursivly()
    {
        // $ar1 = $this->ar1;
        // $ar2 = $this->ar2;
        return array_merge_recursive(...$this->arrays);
    }

    #--------------------

    public function arrayReplaceRecarsive()
    {
        $base = array('citrus' => array("orange"), 'berries' => array("blackberry", "raspberry"),);
        $replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));

        $basket = array_replace_recursive($base, $replacements);
        print_r($basket);

        $basket = array_replace($base, $replacements);
        return $basket;
    }
}
