<?php namespace Zainab\SimpleContact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateZainabSimplecontactContact extends Migration
{
    public function up()
    {
        if (!Schema::hasColumn('zainab_simplecontact_contact', 'is_replied')) {
            Schema::table('zainab_simplecontact_contact', function($table)
            {
                $table->boolean('is_replied')->default(0);
            });
        }
    }
    
    public function down()
    {
        Schema::table('zainab_simplecontact_contact', function($table)
        {
            $table->dropColumn('is_replied');
        });
    }
}
