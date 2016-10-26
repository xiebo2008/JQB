<?php
use kartik\widgets\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Coupon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="coupon-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descr')->textInput(['maxlength' => true]) ?>
    <?php
        if(isset($model->coupon)){
            echo $form->field($model, 'coupon')->textInput(['readonly'=>true]);
        }
    ?>
    <?php
        if(!isset($model->type)){
            $model->type=1;
        }
    ?>
    <?= $form->field($model,'type')->radioList([1=>'满减',2=>'抵现',3=>'折扣'])?>
    <div class="form-group field-coupon-minimum">
        <label class="control-label" for="minimum">最低消费</label>

        <div class="input-group">
            <input type="number" id="minimum" class="form-control" name="Coupon[minimum]"
                   value="<?= isset($model->minimum)?$model->minimum:0;?>"
                   min="0"  placeholder="请输入最低消费金额" step="1"/>
            <span class="input-group-addon">元&nbsp;(请输入最低消费金额)</span>
        </div>

        <div class="help-block"></div>
    </div>
    <div class="form-group field-coupon-subtract">
        <label class="control-label" for="subtract">满减/抵现</label>

        <div class="input-group">
            <input type="number" id="subtract" class="form-control" name="Coupon[subtract]"
                   value="<?= isset($model->subtract)?$model->subtract:0;?>"
                   min="0"  placeholder="请输入满减或抵现金额" step="1"/>
            <span class="input-group-addon">元&nbsp;(请输入满减或抵现金额)</span>
        </div>

        <div class="help-block"></div>
    </div>
    <div class="form-group field-coupon-discount" style="display: none">
        <label class="control-label" for="discount">折扣</label>

        <div class="input-group">
            <input type="number" id="discount" class="form-control" name="Coupon[discount]"
                   value="<?= isset($model->discount)?$model->discount:100;?>"
                   min="0" max="100" placeholder="请输入折扣,如95代表九五折" step="0.01"/>
            <span class="input-group-addon">%&nbsp;(请输入折扣,如95代表九五折,70代表7折)</span>
        </div>

        <div class="help-block"></div>
    </div>

    <?php
        if(isset($model->valide_at)){
            $model->valide_at=date('Y-m-d',$model->valide_at);
        }
    ?>
    <?= $form->field($model, 'valide_at')->widget(DatePicker::class,[
        'options' => ['placeholder' => ''],
        'pluginOptions' => [
            'autoclose' => true,
            'todayHighlight' => true,
            'format' => 'yyyy-mm-dd',
        ]
    ])?>
    <?php if(!isset($model->status)){
        $model->status=1;
    }?>
    <?= $form->field($model, 'status')->radioList([1=>'有效',2=>'已使用',3=>'已过期']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', '创建') : Yii::t('app', '更新'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script>
    $(function () {
        $("input[name='Coupon[type]']:checked").each(function () {
            var coupon_type=$(this).val();
            if(coupon_type==1){
                $(".field-coupon-minimum").show();
                $(".field-coupon-subtract").show()
                $(".field-coupon-discount").hide();
            }else if(coupon_type==2){
                $(".field-coupon-minimum").hide();
                $(".field-coupon-subtract").show()
                $(".field-coupon-discount").hide();
            }else{
                $(".field-coupon-minimum").hide();
                $(".field-coupon-subtract").hide()
                $(".field-coupon-discount").show();
            }
        });
        $("input[name='Coupon[type]']").change(function () {
            var coupon_type=$("input[name='Coupon[type]']:checked").val();
            if(coupon_type==1){
                $(".field-coupon-minimum").show();
                $(".field-coupon-subtract").show()
                $(".field-coupon-discount").hide();
            }else if(coupon_type==2){
                $(".field-coupon-minimum").hide();
                $(".field-coupon-subtract").show()
                $(".field-coupon-discount").hide();
            }else{
                $(".field-coupon-minimum").hide();
                $(".field-coupon-subtract").hide()
                $(".field-coupon-discount").show();
            }
        });
    });
    /*function dddddd() {
        var coupon_type=$("input[name='Coupon[type]']:checked").val();
        if(coupon_type==1){
            $(".field-coupon-minimum").show();
            $(".field-coupon-subtract").show()
            $(".field-coupon-discount").hide();
        }else if(coupon_type==2){
            $(".field-coupon-minimum").hide();
            $(".field-coupon-subtract").show()
            $(".field-coupon-discount").hide();
        }else{
            $(".field-coupon-minimum").hide();
            $(".field-coupon-subtract").hide()
            $(".field-coupon-discount").show();
        }
    }*/
</script>