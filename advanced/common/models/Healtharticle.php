<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%health_article}}".
 *
 * @property integer $id
 * @property string $author
 * @property string $content
 * @property integer $created_time
 * @property integer $updated_time
 * @property integer $status
 * @property integer $stick
 * @property string $title
 * @property string $summary
 */
class Healtharticle extends \yii\db\ActiveRecord
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%health_article}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author', 'content', 'created_time', 'updated_time', 'title', 'summary'], 'required'],
            [['id', 'created_time', 'updated_time', 'status', 'stick'], 'integer'],
            [['content'], 'string'],
            [['author'], 'string', 'max' => 200],
            [['title', 'summary'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'author' => Yii::t('app', '作者/来源'),
            'content' => Yii::t('app', '内容'),
            'created_time' => Yii::t('app', '创建时间'),
            'updated_time' => Yii::t('app', '更新时间'),
            'status' => Yii::t('app', '状态'),
            'stick' => Yii::t('app', '置顶'),
            'title' => Yii::t('app', '标题'),
            'summary' => Yii::t('app', '摘要'),
        ];
    }
    public function save($runValidation = true, $attributeNames = null){
        if($this->isNewRecord){
            $this->setAttribute('created_time', time());
            $this->setAttribute('status', self::STATUS_ACTIVE);
        }
        $this->setAttribute('updated_time',time());
        return parent::save($runValidation, $attributeNames);
    }
}
