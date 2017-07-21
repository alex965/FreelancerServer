<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Model\User;
use App\Model\Boss;

class CreateBossesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Boss::TABLE, function (Blueprint $table) {
            $table->integer(Boss::ID)->unsigned();
            $table->primary(Boss::ID);
            $table->foreign(Boss::ID)->references(User::ID)->on(User::TABLE);

            $table->float(Boss::START)->nullable();
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
        Schema::dropIfExists('bosses');
    }
}
