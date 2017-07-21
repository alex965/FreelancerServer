<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Model\ProjectsBelongJob;
use App\Model\Project;
use App\Model\CatalogJobDetail;

class CreateProjectsBelongJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(ProjectsBelongJob::TABLE, function (Blueprint $table) {
            $table->integer(ProjectsBelongJob::PROJECT_ID)->unsigned();
            $table->foreign(ProjectsBelongJob::PROJECT_ID)->referneces(Project::ID)->on(Project::TABLE);
            $table->integer(ProjectsBelongJob::JOB_ID)->unsigned();
            $table->foreign(ProjectsBelongJob::JOB_ID)->references(CatalogJobDetail::ID)->on(CatalogJobDetail::TABLE);
            $table->primary([ProjectsBelongJob::PROJECT_ID, ProjectsBelongJob::JOB_ID]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects_belong_jobs');
    }
}
