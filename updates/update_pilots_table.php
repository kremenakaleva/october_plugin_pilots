<?php namespace Pensoft\Pilots\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class UpdatePilotsTable extends Migration{
    public function up()
    {
        if (!Schema::hasColumn('pensoft_pilots_pilots', 'pilot_number')) {
            Schema::table('pensoft_pilots_pilots', function ($table) {
                $table->integer('pilot_number')->unique()->nullable();
            });
        }
    }

    public function down()
    {
        if (Schema::hasColumn('pensoft_pilots_pilots', 'pilot_number')) {
            Schema::table('pensoft_pilots_pilots', function ($table) {
                $table->dropColumn('pilot_number');
            });
        }
    }
}