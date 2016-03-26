<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Test-Form';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
if (Yii::$app->session->hasFlash('success')){
echo Yii::$app->session->getFlash('success');
}
?>
<?php $form= ActiveForm::begin(); ?>
<?= $form->field($model, 'fname'); ?>
<?= $form->field($model, 'lname'); ?>
<?= $form->field($model, 'age'); ?>
<?= Html::submitButton('ส่งข้อมูล',['class'=>'btn btn-success']); ?>
<?php ActiveForm::end(); ?>

