<?php

use yii\db\Migration;

class m160421_191102_carousel extends Migration
{
    public function up()
    {
        $this->createTable('carousel',[
            'artwork_id' => 'int PRIMARY KEY NOT NULL',
            'order' => $this->integer()->notNull()->defaultValue(1),

        ],'ENGINE = InnoDB');

    }

    public function down()
    {
        $this->dropTable('carousel');
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
