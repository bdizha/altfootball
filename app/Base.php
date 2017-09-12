<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Base extends Model
{
    public function needsResizing($url){
        return strpos($url, '.com') !== false;
    }

}