<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 16/11/2016
 * Time: 21:38
 */

function swith_class($priorityClass) {

    switch ($priority) {
        case 5:
            $priorityClass = 'red';
            break;
        case 4:
            $priorityClass = 'orange';
            break;
        case 3:
            $priorityClass = 'yellow';
            break;
        default:
            $priorityClass = 'green';
    }

    return $priorityClass;

}