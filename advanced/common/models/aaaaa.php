<?php
/**
 * Created by PhpStorm.
 * User: jasongao
 * Date: 16/9/30
 * Time: 16:38
 */?>
public function createCoupon($length){
$str="";
$strPol="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
$max = strlen($strPol)-1;  
for($i=0;$i<$max;$i++){
$str.=$strPol[rand(0,$max)];//rand($min,$max)生成介于min和max两个数之间的一个随机整数 
} 
return strtoupper($str);
} 
public function save($runValidation = true, $attributeNames = null){ 
if($this->isNewRecord){ 
$this->setAttribute('created_at', time()); 
$this->setAttribute('status', self::STATUS_ACTIVE); 
$this->setAttribute('coupon',$this->createCoupon(8)); 
} 
$this->setAttribute('valide_at',strtotime($this->valide_at)); 
return parent::save($runValidation, $attributeNames); 
} 
public function batchSave($runValidation = true, $attributeNames = null)
{
try {
$descr = $this->descr;
$valide_at = $this->valide_at;
for ($i = 0; $i < $this->batch_count; $i++) {
$model = new Coupon();
$model->descr = $descr;
$model->valide_at = $valide_at;
$model->created_at = time();
$model->status = self::STATUS_ACTIVE;
$model->save();
}
return true;
} catch (Exception $e) {
return false;
}
}
