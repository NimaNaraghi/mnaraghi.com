<?php

use yii\db\Migration;

/**
 * Handles adding feature_column to table `artwork_table`.
 */
class m160521_161156_add_feature_column_to_artwork_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('artwork','featured', $this->smallInteger()->defaultValue(0));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('artwork','featured');
    }
}
