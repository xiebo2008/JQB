<?php

namespace app\models;

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
            'author' => Yii::t('app', 'Author'),
            'title' => Yii::t('app', 'Title'),
            'summary' => Yii::t('app', 'Summary'),
            'content' => Yii::t('app', 'Content'),
            'created_time' => Yii::t('app', 'Created Time'),
            'updated_time' => Yii::t('app', 'Updated Time'),
            'stick' => Yii::t('app', 'Stick'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
