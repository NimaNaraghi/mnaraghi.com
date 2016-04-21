<?php

use yii\db\Migration;

class m160421_075518_add_create_update_status_column extends Migration
{
    public function up()
    {
        $this->addColumn('artwork','created_at',$this->integer());
        $this->addColumn('artwork','updated_at',$this->integer());
        $this->addColumn('artwork','status','TINYINT default 0 NOT NULL');
        $this->alterColumn('artwork','view', $this->integer()->notNull()->defaultValue(0));

    }

    public function down()
    {
        $this->dropColumn('artwork','created_at');
        $this->dropColumn('artwork','updated_at');
        $this->dropColumn('artwork','status');
        $this->alterColumn('artwork','view', $this->integer());
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
