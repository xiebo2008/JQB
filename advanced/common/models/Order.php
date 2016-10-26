<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property string $shouqian_name
 * @property string $shouqian_phone
 * @property string $shouhuo_name
 * @property string $shouhuo_phone
 * @property string $shouhuo_dizhi
 * @property string $shouhuo_menpai
 * @property integer $yuding_time
 * @property integer $yuding_shuliang
 * @property string $yuding_shangpin
 * @property double $zongjia
 * @property integer $sendmail
 * @property integer $status
 * @property integer $paytype
 * @property string $tradeno
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['yuding_time'], 'required'],
            [['yuding_time', 'yuding_shuliang', 'sendmail', 'status', 'paytype'], 'integer'],
            [['zongjia'], 'number'],
            [['shouqian_name', 'shouhuo_name', 'tradeno'], 'string', 'max' => 100],
            [['shouqian_phone', 'shouhuo_phone'], 'string', 'max' => 20],
            [['shouhuo_dizhi', 'shouhuo_menpai', 'yuding_shangpin'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'shouqian_name' => Yii::t('app', '售前名称'),
            'shouqian_phone' => Yii::t('app', '售前电话'),
            'shouhuo_name' => Yii::t('app', '收货人'),
            'shouhuo_phone' => Yii::t('app', '电话'),
            'shouhuo_dizhi' => Yii::t('app', '地址'),
            'shouhuo_menpai' => Yii::t('app', '门牌号'),
            'yuding_time' => Yii::t('app', '时间'),
            'yuding_shuliang' => Yii::t('app', '数量'),
            'yuding_shangpin' => Yii::t('app', '产品'),
            'zongjia' => Yii::t('app', '总价'),
            'sendmail' => Yii::t('app', '发送邮件'),
            'status' => Yii::t('app', '状态'),
            'paytype' => Yii::t('app', '支付方式'),
            'tradeno' => Yii::t('app', '支付平台订单号'),
        ];
    }
    public function save($runValidation = true, $attributeNames = null){
        if($this->isNewRecord){
            $this->setAttribute('yuding_time', time());
        }
        return parent::save($runValidation, $attributeNames);
    }
}
