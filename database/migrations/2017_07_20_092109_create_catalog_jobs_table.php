<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Model\CatalogJob;

class CreateCatalogJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(CatalogJob::TABLE, function (Blueprint $table) {
            $table->increments(CatalogJob::ID);
            $table->string(CatalogJob::DISPLAY);

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
        Schema::dropIfExists('catalog_jobs');
    }
}
