<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "feedback".
 *
 * @property integer $id
 * @property string $content
 * @property string $phone
 * @property string $feedback_time
 * @property integer $status
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'feedback';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content', 'feedback_time', 'status'], 'required','message'=>'必填项!'],
            [['content'], 'string'],
            [['status'], 'integer'],
            [['phone'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'content' => Yii::t('app', '内容'),
            'phone' => Yii::t('app', '电话'),
            'feedback_time' => Yii::t('app', '提交时间'),
            'status' => Yii::t('app', '状态'),
        ];
    }
}
