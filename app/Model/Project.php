<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    const TABLE = 'projects';
    const ID = 'id';
    const BOSS_ID = 'boss_id';
    const TITLE = 'title';
    const DESCRIPTION = 'description';
    const BUDGET_MIN = 'budgetMin';
    const BUDGET_MAX = 'budgetMax';
    const START_TIME = 'startTime';
    const END_TIME = 'endTime';
    const STATUS = 'status';
    const SCORE_TO_WORKER = 'scoreToWorker';

    const WORKER_ID = 'worker_id';
    const BID_COST = 'bidCost';
    const SCORE_TO_BOSS = 'scoreToBoss';
}
