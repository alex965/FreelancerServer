<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Model\CatalogSkill;

class CreateCatalogSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(CatalogSkill::TABLE, function (Blueprint $table) {
            $table->increments(CatalogSkill::ID);
            $table->string(CatalogSkill::DISPLAY);
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
        Schema::dropIfExists('catalog_skills');
    }
}
