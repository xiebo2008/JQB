<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $author
 * @property string $title
 * @property string $summary
 * @property string $content
 * @property integer $created_time
 * @property integer $updated_time
 * @property integer $stick
 * @property integer $status
 */
class News extends \yii\db\ActiveRecord
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author', 'title', 'summary', 'content', 'created_time', 'updated_time'], 'required'],
            [['content'], 'string'],
            [['created_time', 'updated_time', 'stick', 'status'], 'integer'],
            [['author', 'title', 'summary'], 'string', 'max' => 200],
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
            'title' => Yii::t('app', '标题'),
            'summary' => Yii::t('app', '摘要'),
            'content' => Yii::t('app', '内容'),
            'created_time' => Yii::t('app', '创建时间'),
            'updated_time' => Yii::t('app', '更新时间'),
            'stick' => Yii::t('app', '置顶'),
            'status' => Yii::t('app', '状态'),
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
