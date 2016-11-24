<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 19/11/2016
 * Time: 14:53
 */

namespace App\Presenters;

use Laracasts\Presenter\Presenter;

class TodoPresenter extends Presenter
{

    public function priorityClass()
    {
        switch ($this->priority) {
            case 5:
                $proClass = 'red';
                break;
            case 4:
                $proClass = 'orange';
                break;
            case 3:
                $proClass = 'yellow';
                break;
            default:
                $proClass = 'green';
        }

        return $proClass;
    }

}