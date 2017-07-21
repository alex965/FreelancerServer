<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Model\Worker;
use App\Model\WorkerHasSkill;
use App\Model\CatalogSkillDetail;

class CreateWorkerHasSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(WorkerHasSkill::TABLE, function (Blueprint $table) {
            $table->integer(WorkerHasSkill::WORKER_ID)->unsigned();
            $table->foreign(WorkerHasSkill::WORKER_ID)->references(Worker::ID)->on(Worker::TABLE);
            $table->integer(WorkerHasSkill::SKILL_ID)->unsigned();
            $table->foreign(WorkerHasSkill::SKILL_ID)->references(CatalogSkillDetail::ID)->on(CatalogSkillDetail::TABLE);
            $table->primary([WorkerHasSkill::WORKER_ID, WorkerHasSkill::SKILL_ID]);

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
        Schema::dropIfExists('worker_has_skills');
    }
}
