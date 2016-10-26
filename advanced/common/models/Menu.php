<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property integer $id
 * @property string $menu
 * @property integer $parent
 * @property string $link
 * @property integer $status
 * @property string $descr
 * @property integer $position
 * @property integer $sequence
 */
class Menu extends \yii\db\ActiveRecord
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu'], 'required'],
            [['parent', 'status', 'position','sequence'], 'integer'],
            [['menu', 'link', 'descr'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'menu' => Yii::t('app', '菜单名称'),
            'parent' => Yii::t('app', '父级菜单'),
            'link' => Yii::t('app', '链接地址'),
            'status' => Yii::t('app', '状态'),
            'descr' => Yii::t('app', '描述'),
            'position' => Yii::t('app', '位置'),
        ];
    }

    public static function getAllMenu(){
        $result=array();
        $result[]=array(0=>'none');
        $allmenu=Menu::findAll(['parent'=>0]);
        foreach ($allmenu as $menu){
            $result[]=array($menu->id=>$menu->menu);
        }
        return $result;
    }
}
