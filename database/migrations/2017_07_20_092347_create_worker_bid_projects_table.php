<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Model\WorkerBidProject;
use App\Model\Worker;
use App\Model\Project;

class CreateWorkerBidProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(WorkerBidProject::TABLE, function (Blueprint $table) {
            $table->integer(WorkerBidProject::WORKER_ID)->unsigned();
            $table->foreign(WorkerBidProject::WORKER_ID)->references(Worker::ID)->on(Worker::TABLE);
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
        Schema::dropIfExists('worker_bid_projects');
    }
}
