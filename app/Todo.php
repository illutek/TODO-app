<?php

namespace App;


use App\Presenters\TodoPresenter;
use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;


class Todo extends Model
{
    use PresentableTrait;
    protected $presenter = TodoPresenter::class;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
