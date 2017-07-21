<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProjectsBelongJob extends Model
{
    const TABLE = 'projects_belong_jobs';
    const PROJECT_ID = 'project_id';
    const JOB_ID = 'job_id';
}
