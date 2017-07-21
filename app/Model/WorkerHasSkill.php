<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WorkerHasSkill extends Model
{
    const TABLE = 'worker_has_skills';
    const WORKER_ID = 'worker_id';
    const SKILL_ID = 'skill_id';

    /*public function getWorkerIdAttribute()
    {
        return $this->attributes[self::WORKER_ID];
    }
    public function setWorkerIdAttribute($id)
    {
        $this->attributes[self::WORKER_ID] = $id;
    }//*/
}
