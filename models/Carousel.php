<?php

namespace app\models;

use Yii;
use app\models\Carousel;
use app\models\Artwork;
use yii\helpers\FileHelper;
use yii\imagine\Image;
use Imagine\Image\Box;
use Imagine\Image\Point;
use yii\helpers\Html;
use yii\helpers\Url;
/**
 * This is the model class for table "carousel".
 *
 * @property integer $artwork_id
 * @property integer $order
 */
class Carousel extends \yii\db\ActiveRecord
{
    const IMAGE_PREFIX = "carousel-"; 
    const WIDTH = "770";
    const HEIGHT = "393";
    const LIMIT = 6;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carousel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['artwork_id'], 'required'],
            [['artwork_id', 'order'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'artwork_id' => Yii::t('app', 'Artwork ID'),
            'order' => Yii::t('app', 'Order'),
        ];
    }

    public function getArtwork()
    {
        return $this->hasOne(Artwork::className(),['id' => 'artwork_id']);
    }

    public function afterDelete()
    {
        parent::afterDelete();
        $this->deleteImage();

    }


    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        
        
        $imagePath = $this->artwork->getImagePath('main-');
        if(!empty($imagePath)){
            // open image
            $imageFileOpened = Image::getImagine()->open($imagePath);

            $imageFileExtension = pathinfo($imagePath, PATHINFO_EXTENSION);

            //saving resized image
            $path = Yii::getAlias('@carouselImage') . self::IMAGE_PREFIX . md5($this->artwork->id) . '.' . $imageFileExtension;

            $imageFileOpened->thumbnail(new Box(self::WIDTH,self::HEIGHT))
            ->save($path, ['quality' => 100]);
    
        }
        
        
    }

    public function deleteImage()
    {
        //find image by prefix and delete it
        $oldImages = FileHelper::findFiles(Yii::getAlias('@carouselImage'), [
            'only' => [
                self::IMAGE_PREFIX . md5($this->artwork_id) . '.*',
            ], 
        ]);
        for ($i = 0; $i != count($oldImages); $i++) {
            @unlink($oldImages[$i]);
        }

    }

    public function getImageURL()
    {
        return Url::base() . 'uploads/images/carousel/' . self::IMAGE_PREFIX . md5($this->artwork->id) . '.jpg'; 
    }

    public function getImagePath()
    {
        
        
        
        $path =  Yii::getAlias('@carouselImage') . self::IMAGE_PREFIX . md5($this->artwork_id) . '.jpg';
        return $path;
            

    }
}
