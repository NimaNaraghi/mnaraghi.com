<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "style".
 *
 * @property integer $id
 * @property string $title
 */
class Style extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'style';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
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
        return $this->hasMany(Artwork::className(), ['style_id' => 'id']);
    }
}
