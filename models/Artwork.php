<?php

namespace app\models;

use Yii;
use yii\helpers\FileHelper;
use yii\imagine\Image;
use Imagine\Image\Box;
use Imagine\Image\Point;
use yii\helpers\Html;
use yii\helpers\Url;
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
    public $imageFile;

    const IMAGE_MAX_WIDTH = 1280;
    const IMAGE_MAX_HEIGHT = 720;    

    const BIG_THUMB_WIDTH = 800;
    const BIG_THUMB_HEIGHT = 600;

    const SMALL_THUMB_WIDTH = 80;
    const SMALL_THUMB_HEIGHT = 80;
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
            [['code', 'width', 'height', 'theme_id', 'category_id', 'style_id', 'technic_id', 'view'], 'integer'],
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
            'theme_id' => Yii::t('app', 'Theme'),
            'category_id' => Yii::t('app', 'Category'),
            'style_id' => Yii::t('app', 'Style'),
            'technic_id' => Yii::t('app', 'Technic'),
            'description' => Yii::t('app', 'Description'),
            'view' => Yii::t('app', 'View'),
        ];
    }

    public function imagePrefixes()
    {
        return [
            'main_' => ['width' => self::IMAGE_MAX_WIDTH,'height' => self::IMAGE_MAX_HEIGHT , 'title' => Yii::t('app','Main')],
            'small_' => ['width' => self::SMALL_THUMB_WIDTH,'height' => self::SMALL_THUMB_HEIGHT , 'title' => Yii::t('app','Small')], 
            'big_' => ['width' => self::BIG_THUMB_WIDTH,'height' => self::BIG_THUMB_HEIGHT , 'title' => Yii::t('app','Big')]
        ];
    }

    public function afterDelete()
    {
        parent::afterDelete();
        $this->deleteAllImages();

    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        //create a new image considering each prefix
        foreach ($this->imagePrefixes() as $prefix => $attributes) 
        {
            $imageFile = $this->imageFile;
            if(!empty($imageFile)){
                // open image
                $imageFileOpened = Image::getImagine()->open($imageFile->tempName);
                //delete old images
                $this->deleteImage($prefix);

                //saving resized image
                $path = Yii::getAlias('@artworkImage') . $prefix . md5($this->id) . '.' . $imageFile->getExtension();

                $imageFileOpened->thumbnail(new Box($attributes['width'],$attributes['height']),
                 \Imagine\Image\ManipulatorInterface::THUMBNAIL_INSET)
                ->save($path, ['quality' => 100]);
        
            }
        }
        
    }

    private function deleteAllImages()
    {
        foreach ($this->imagePrefixes() as $prefix => $attributes) 
        {
            $this->deleteImage($prefix);
        }
    }

    public function deleteImage($prefix)
    {
        //find image by prefix and delete it
        $oldImages = FileHelper::findFiles(Yii::getAlias('@artworkImage'), [
            'only' => [
                $prefix . md5($this->id) . '.*',
            ], 
        ]);
        for ($i = 0; $i != count($oldImages); $i++) {
            @unlink($oldImages[$i]);
        }

    }
    
    public function getImageURLs($options = [])
    {   
        $urlArrays = [];
        $prefixes = $this->imagePrefixes();
        //If prefixes are specified, url array is set according to the options
        if(!empty($options)){
            foreach ($options as $inputPrefix) 
            {
                if(array_key_exists($inputPrefix, $prefixes) && $this->imageExist($inputPrefix)){
                    $urlArrays[$inputPrefix] = \yii\helpers\Url::to(['/']) . '/uploads/images/artworks/' . $inputPrefix . md5($this->id) . '.jpg';
                }
            } 

        }
        //If no prefix is specified, all urls returns as an array
        else{
            
            foreach($prefixes as $prefix => $sizesArray)
            {
                if($this->imageExist($prefix))
                    $urlArrays[$prefix] =  \yii\helpers\Url::to(['/']) . '/uploads/images/artworks/' . $prefix . md5($this->id) . '.jpg';
            }
            
        }

        return $urlArrays;

    }
    //Check if a particular image exists 
    protected function imageExist($prefix)
    {
        $images = FileHelper::findFiles(Yii::getAlias('@artworkImage'), [
            'only' => [
                $prefix . md5($this->id) . '.*',
            ], 
        ]);

        if(count($images)>0)
            return true;
        return false;

    }

    public static function getThemeOptions()
    {
        return Theme::find()->select(['title', 'id'])->indexBy('id')->column();

    }

    public static function getCategoryOptions()
    {
        return Category::find()->select(['title', 'id'])->indexBy('id')->column();
    }

    public static function getTechnicOptions()
    {
        return Technic::find()->select(['title', 'id'])->indexBy('id')->column();
    }

    public static function getStyleOptions()
    {
        return Style::find()->select(['title', 'id'])->indexBy('id')->column();
    }


    public function getTheme()
    {
        return $this->hasOne(Theme::className(), ['id' => 'theme_id']);
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    public function getTechnic()
    {
        return $this->hasOne(Technic::className(), ['id' => 'technic_id']);
    }

    public function getStyle()
    {
        return $this->hasOne(Style::className(), ['id' => 'style_id']);
    }
}
