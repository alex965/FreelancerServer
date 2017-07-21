<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Model\Project;
use App\Model\Boss;
use App\Model\Worker;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Project::TABLE, function (Blueprint $table) {
            $table->increments(Project::ID);

            $table->integer(Project::BOSS_ID)->unsigned();
            $table->foreign(Project::BOSS_ID)->references(Boss::ID)->on(Boss::TABLE);

            $table->string(Project::TITLE);
            $table->text(Project::DESCRIPTION);
            $table->float(Project::BUDGET_MIN);
            $table->float(Project::BUDGET_MAX)->nullable();
            $table->dateTime(Project::START_TIME);
            $table->dateTime(Project::END_TIME)->nullable();
            $table->integer(Project::STATUS)->default(0);
            $table->float(Project::SCORE_TO_WORKER)->nullable();

            $table->integer(Project::WORKER_ID)->unsigned()->nullable();
            $table->foreign(Project::WORKER_ID)->references(Worker::ID)->on(Worker::TABLE);
            $table->float(Project::BOSS_ID)->nullable();
            $table->float(Project::SCORE_TO_BOSS)->nullable();

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
        Schema::dropIfExists('projects');
    }
}
