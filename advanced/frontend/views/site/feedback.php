<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/11
 * Time: 16:20
 */
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>
<div class="container" id="qyjs_title">
    <section style="padding:0;">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-left">
                <h4>意见建议</h4>
            </div>
        </div>
    </section>
</div>
<style>
    input::-webkit-input-placeholder { color: #D6D0CA !important;} /* WebKit browsers */
    input:-moz-placeholder { color: #D6D0CA !important;  }/* Mozilla Firefox 4 to 18 */
    input::-moz-placeholder { color: #D6D0CA !important;}
</style>
<div class="container" id="feedback">
    <section>
        <div class="row">
            <div class="col-md-12 col-sm-12 text-left">
                <p class="tishi">如果您在使用健亲宝过程中遇到任何问题，或者对我们有任何建议意见，
                    请您通过以下方式与我们联系，我们将用心倾听。</p>
            </div>
            <div class="col-md-12 col-sm-12 text-left">
                <p class="feedback_type">方式一：直接给我们留言</p>
                <form action="/site/submitfeedback">
                    <textarea id="feedback_content" name="content" cols="80" rows="8" placeholder="请输入您的意见或建议，帮助我们快快成长……"></textarea><span class="error_msg" style="display: none">*留言内容不可为空！</span><br>
                    <input type="text" id="feedback_phone" name="phone" style="margin-top:10px;height:30px;line-height: 30px;width: 583px;"
                           placeholder="请留下您的联系方式，方便我们与您联系。" ><br>
                    <input type="button" onclick="submit_feedback()" value="提交" style="margin-top:10px;width: 80px;height: 35px;font-size: 16px;
                    color:#fa460a;border-radius: 5px;">
                </form>
            </div>
            <div class="col-md-12 col-sm-12 text-left">
                <p class="feedback_type" style="margin-top: 20px">方式二：微信反馈</p>
                <p class="feedback_type"><img src="/images/dyh_ewm.jpg" width="120px">扫描二维码，关注健亲宝公众账号，反馈您的建议或意见。</p>

            </div>
        </div>
    </section>
</div>
<script>
function submit_feedback(){
    if(!$("#feedback_content").val()){
        $(".error_msg").show();
        return;
    }else{
        $.getJSON("/site/submitfeedback",{"content":$("#feedback_content").val(),"phone":$("#feedback_phone").val()},function(result){
            if(result.status==200){
                $("#feedback_content").val('');
                layer.msg('感谢您的留言！', {icon: 1});
            }else{
                $("#feedback_content").val('');
                layer.msg('提交留言失败！', {icon: 5});
            }
        });
    }
}
</script>
