<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Model\ProjectNeedSkill;
use App\Model\Project;
use App\Model\CatalogSkillDetail;

class CreateProjectNeedSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(ProjectNeedSkill::TABLE, function (Blueprint $table) {
            $table->integer(ProjectNeedSkill::PROJECT_ID)->unsigned();
            $table->foreign(ProjectNeedSkill::PROJECT_ID)->references(Project::ID)->on(Project::TABLE);
            $table->integer(ProjectNeedSkill::SKILL_ID)->unsigned();
            $table->foreign(ProjectNeedSkill::SKILL_ID)->references(CatalogSkillDetail::ID)->on(CatalogSkillDetail::TABLE);
            $table->primary([ProjectNeedSkill::PROJECT_ID, ProjectNeedSkill::SKILL_ID]);
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
        Schema::dropIfExists('project_need_skills');
    }
}
