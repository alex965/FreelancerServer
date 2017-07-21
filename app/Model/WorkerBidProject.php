<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WorkerBidProject extends Model
{
    const TABLE = 'worker_bid_projects';
    const WORKER_ID = 'worker_id';
    const PROJECT_ID = 'project_id';
    const BID_COST = 'bidCost';
    const COMMENT = 'comment';
    const URL = 'url';
}
