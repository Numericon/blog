<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;


class ImageUpLoad extends Model{

    public $image;


    public function UpLoadImage(UploadedFile $file)
    {
        $this->image=$file;

//        $filename=$this->name

        $file->saveAs(YII::getAlias('@web').'uploads/'.$file->name);

        return $file->name;

    }
}