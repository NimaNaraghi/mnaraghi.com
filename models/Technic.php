<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "technic".
 *
 * @property integer $id
 * @property string $title
 */
class Technic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'technic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
        ];
    }

    public function getArtworks()
    {
        return $this->hasMany(Artwork::className(), ['technic_id' => 'id']);
    }
}
