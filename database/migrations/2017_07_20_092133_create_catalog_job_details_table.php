<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Model\CatalogJob;
use App\Model\CatalogJobDetail;

class CreateCatalogJobDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(CatalogJobDetail::ID, function (Blueprint $table) {
            $table->integer(CatalogJobDetail::ID)->unsigned();
            $table->primary(CatalogJobDetail::ID);
            $table->foreign(CatalogJobDetail::ID)->references(CatalogJob::ID)->on(CatalogJob::TABLE);

            $table->string(CatalogJobDetail::DISPLAY);
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
        Schema::dropIfExists('catalog_job_details');
    }
}
