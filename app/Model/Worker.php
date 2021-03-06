<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    const TABLE = 'workers';
    const ID = 'user_id';
    const START = 'start';

    public function getIdAttribute()
    {
        return $this->attributes[self::ID];
    }
    public function setIdAttribute($id)
    {
        $this->attributes[self::ID] = $id;
    }
}
