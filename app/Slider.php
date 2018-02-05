<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public function services(){

        return $this->hasemany('App\Service');
    }
}
