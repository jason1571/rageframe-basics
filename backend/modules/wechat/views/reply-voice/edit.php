<?php
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = $model->isNewRecord ? '创建' : '编辑';
$this->params['breadcrumbs'][] = ['label' => '自动回复', 'url' => ['reply/index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="wrapper wrapper-content animated fadeInRight">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <?= $this->render('/common/rule_edit_base',[
            'form'          => $form,
            'rule'          => $rule,
            'keyword'       => $keyword,
            'ruleKeywords'  => $ruleKeywords,
        ])?>
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>回复内容</h5>
                </div>
                <div class="ibox-content">
                    <div class="col-sm-12">
                        <?= $form->field($model, 'title')->textInput() ?>
                        <?= $form->field($model, 'mediaid')->textInput()->hint('临时语音只支持amr/mp3格式,大小不超过为2M<br>永久语音只支持mp3/wma/wav/amr格式,大小不超过为5M,长度不超过60秒') ?>
                        <div class="hr-line-dashed"></div>
                    </div>
                    <div class="form-group">　
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-primary" type="submit">保存内容</button>
                            <span class="btn btn-white" onclick="history.go(-1)">返回</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>

