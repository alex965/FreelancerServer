<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Model\CatalogSkill;
use App\Model\CatalogSkillDetail;

class CreateCatalogSkillDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(CatalogSkillDetail::TABLE, function (Blueprint $table) {
            $table->integer(CatalogSkillDetail::ID)->unsigned();
            $table->primary(CatalogSkillDetail::ID);
            $table->foreign(CatalogSkillDetail::ID)->references(CatalogSkill::ID)->on(CatalogSkill::TABLE);

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
        Schema::dropIfExists('catalog_skill_details');
    }
}
