<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "health_consultant".
 *
 * @property integer $id
 * @property string $title
 * @property string $cname
 * @property string $celphone
 * @property string $telphone
 * @property string $email
 * @property integer $status
 */
class Healthconsultant extends \yii\db\ActiveRecord
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'health_consultant';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'cname', 'celphone', 'telphone', 'email'], 'required'],
            [['status'], 'integer'],
            [['title', 'cname'], 'string', 'max' => 200],
            [['celphone', 'telphone'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', '头衔'),
            'cname' => Yii::t('app', '名称'),
            'celphone' => Yii::t('app', '座机'),
            'telphone' => Yii::t('app', '手机'),
            'email' => Yii::t('app', '邮箱'),
            'status' => Yii::t('app', '状态'),
        ];
    }
}
