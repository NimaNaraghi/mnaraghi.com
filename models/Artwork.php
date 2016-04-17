<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "artwork".
 *
 * @property integer $id
 * @property string $title
 * @property integer $code
 * @property integer $width
 * @property integer $height
 * @property integer $theme
 * @property integer $category
 * @property integer $style
 * @property integer $technic
 * @property string $description
 * @property integer $view
 */
class Artwork extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'artwork';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'width', 'height', 'theme', 'category', 'style', 'technic', 'view'], 'integer'],
            [['description'], 'string'],
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
            'code' => Yii::t('app', 'Code'),
            'width' => Yii::t('app', 'Width'),
            'height' => Yii::t('app', 'Height'),
            'theme' => Yii::t('app', 'Theme'),
            'category' => Yii::t('app', 'Category'),
            'style' => Yii::t('app', 'Style'),
            'technic' => Yii::t('app', 'Technic'),
            'description' => Yii::t('app', 'Description'),
            'view' => Yii::t('app', 'View'),
        ];
    }
}
