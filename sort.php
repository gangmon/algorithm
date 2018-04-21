<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/22
 * Time: 上午12:23
 */
//冒泡排序
function bubble_sort($array)
{
    $count = count($array);

    if ($count <= 0) return false;
    for ($i = 0;$i < $count;$i ++)
    {
        for ($j = $count-1;$j > $i;$j --)
        {
            if ($array[$i] < $array[$j-1])
            {
                $tmp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $tmp;
            }
        }
    }
    return $array;
}

//快速排序
function quick_sort($array)
{
    if ( count($array) <= 1) return $array;
    $key = $array[0];
    $left_arr = $array();
    $right_arr = $array();
    for ($i = 1;$i;$i ++)
    {
        if ($array[$i] <= $key)
        {
            $left_arr[] = $array[$i];
        }else
        {
            $right_arr[] = $array[$i];
        }
    }
    $left_arr = quick_sort($left_arr);
    $right_arr = quick_sort($right_arr);

}