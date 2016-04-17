<?php

use yii\db\Migration;

/**
 * Handles the creation for table `artwork_table`.
 */
class m160417_181534_create_artwork_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('artwork', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'code' => $this->integer(),
            'width' => $this->integer(),
            'height' => $this->integer(),
            'theme' => $this->integer(),
            'category' => $this->integer(),
            'style' => $this->integer(),
            'technic' => $this->integer(),
            'description' => $this->text(),
            'view' => $this->integer(),
        ],'ENGINE = InnoDB');

        $this->createTable('theme',[
                'id' => $this->primaryKey(),
                'title' => $this->string(),
            ],'ENGINE = InnoDB');

        $this->createTable('category',[
                'id' => $this->primaryKey(),
                'title' => $this->string(),
            ],'ENGINE = InnoDB');

        $this->createTable('style',[
                'id' => $this->primaryKey(),
                'title' => $this->string(),
            ],'ENGINE = InnoDB');

        $this->createTable('technic',[
                'id' => $this->primaryKey(),
                'title' => $this->string(),
            ],'ENGINE = InnoDB');


    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('artwork');
        $this->dropTable('theme');
        $this->dropTable('category');
        $this->dropTable('style');
        $this->dropTable('technic');
    }
}
